<?php

namespace App\Http\Controllers;

use App\Models\ContactWithMe;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class ContactWithMeController extends Controller
{
    public function index(){
        return view('admin.contact_with_me.index');
    }

    public function getContactWithMe(Request $request){
        if ($request->ajax()) {
            $data = ContactWithMe::orderBy('updated_at', 'desc')->get();
            return DataTables::of($data)
            ->addIndexColumn()
            ->editColumn('message', function($d){
                $result = '
                    '.Str::of($d->message)->limit(70).'
                ';
                return $result;
            })
            ->editColumn('action', function($d){
                $result = '
                <div class="d-flex flex-row justify-content-center gap-1">
                    <a type="button" class="btn btn-warning bg-warning" href="/admin/change-making-project/'.$d->id.'/edit">
                        <i class="ti ti-edit fs-4" data-bs-toggle="tooltip" data-bs-title="Edit this Change Making Project"></i>
                    </a>
                    <button type="button" class="btn btn-danger bg-danger" data-bs-toggle="modal" data-bs-target="#delete" onclick="formDelete('.$d->id.')">
                        <i class="ti ti-trash fs-4" data-bs-toggle="tooltip" data-bs-title="Delete this Change Making Project"></i>
                    </button>
                </div>
                ';
                return $result;
            })
            ->rawColumns(['message', 'action'])
            ->make(true);
        }
    }
}
