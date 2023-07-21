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
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index(): View
    {
        // Get all Change making projects from database
        // Order by is highlight after date updated_at
        // And take 3 from top result
        $changeMakingProjects = ChangeMakingProject::orderBy('is_highlight', 'desc')->orderBy('updated_at', 'desc')->get()->take(3);

        // Get all Speaking Opportunities from database
        // Order by is highlight after date updated_at
        // and take 3 from top result
        $speakingOpportunities = SpeakingOpportunities::orderBy('is_highlight', 'desc')->orderBy('updated_at', 'desc')->get()->take(3);

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

        if ($validator->fails()) {
            return redirect(back()->withErrors($validator)->withInput()->getTargetUrl() . '#contact');
        }

        DB::beginTransaction();
        try {
            ContactWithMe::create($request->all());
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
        }

        return redirect(back()->with('success_send', 'Thank you for connect with me!')->getTargetUrl() . '#contact');
    }
}
