<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChangeMakingProject;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class AwardAchievementController extends Controller
{
    public function index(){
        return view('admin.award_achievement.index');
    }
}
