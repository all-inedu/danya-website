<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ChangeMakingProject;
use App\Models\ContactWithMe;
use App\Models\SpeakingOpportunities;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index(): View
    {
        // Get all Change making projects from database
        // Order by is highlight after date updated_at
        // And take 3 from top result
        $changeMakingProjects = ChangeMakingProject::where('is_highlight', 'true')->orderBy("end_date")->orderBy('updated_at')->get();

        // Get all Speaking Opportunities from database
        // Order by is highlight after date updated_at
        // and take 3 from top result
        $speakingOpportunities = SpeakingOpportunities::where('is_highlight', 'true')->orderBy("event_date")->orderBy('updated_at')->get();

        // Get id video from given youtube link
        // and put in into video_link_id variable
        foreach ($speakingOpportunities as $item) {
            $item['video_link_id'] = substr($item->video_link, strrpos($item->video_link, '/') + 1);
        }

        return view('user.home', [
            'change_making_projects' => $changeMakingProjects,
            'speaking_opportunities' => $speakingOpportunities,
        ]);
    }

    public function contact_with_me(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'contact_number' => 'required|numeric',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Validate all given data
        if ($validator->fails()) {
            return redirect(back()->withErrors($validator)->withInput()->getTargetUrl() . '#contact');
        }

        // Put all request into $validateData variable
        $validatedData = $request->all();

        // Hendle contact number by remove invalid format
        $validatedData['contact_number'] = $this->formatContactNumber($validatedData['contact_number']);
        $emailContent = [
            'name' => $validatedData['name'],
            'contact_number' => $validatedData['contact_number'],
            'email' => $validatedData['email'],
            'message_content' => $validatedData['message'],
        ];
        $mailRecipient = "sjrnl27@gmail.com";

        DB::beginTransaction();
        try {
            // Send email to danya email
            Mail::send('mail.send-email', $emailContent, function ($mail) use ($mailRecipient, $emailContent) {
                $mail->from($emailContent['email'], $emailContent['name']);
                $mail->to($mailRecipient);
                $mail->subject('Connect With Me!');
            });

            if (Mail::flushMacros()) {
                return redirect(back()->with('failed_send', 'Failed To Send Email!')->getTargetUrl() . '#contact');
            }

            ContactWithMe::create($validatedData);
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return redirect(back()->with('failed_send', 'Failed: ' . $e->getMessage())->getTargetUrl() . '#contact');
        }

        return redirect(back()->with('success_send', 'Thank you for connect with me!')->getTargetUrl() . '#contact');
    }

    private function formatContactNumber($contactNumber)
    {
        // Remove any non-numeric characters from the phone number
        $contactNumber = preg_replace('/[^0-9]/', '', $contactNumber);

        // Check if the number starts with '0', if so, replace it with '+62'
        if (strpos($contactNumber, '0') === 0) {
            $contactNumber = '+62' . substr($contactNumber, 1);
        }

        // Check if the number starts with '62', if so, prepend it with '+'
        if (strpos($contactNumber, '62') === 0) {
            $contactNumber = '+' . $contactNumber;
        }

        // Check if the number starts with '(+62)', if so, remove it
        if (strpos($contactNumber, '(+62)') === 0) {
            $contactNumber = '+' . substr($contactNumber, 5);
        }

        // Check if the number starts with '62' followed by any non-digit character, if so, replace it with '+62'
        if (preg_match('/^62\D/', $contactNumber)) {
            $contactNumber = '+62' . substr($contactNumber, 2);
        }

        // Check if the number starts with '0' followed by any non-digit character, if so, replace it with '+62'
        if (preg_match('/^0\D/', $contactNumber)) {
            $contactNumber = '+62' . substr($contactNumber, 1);
        }

        // Check if the number has 10 digits, if so, add '+62' to the beginning
        if (strlen($contactNumber) === 10) {
            $contactNumber = '+62' . $contactNumber;
        }

        return $contactNumber;
    }
}
