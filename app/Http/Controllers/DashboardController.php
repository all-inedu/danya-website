<?php

namespace App\Http\Controllers;

use App\Models\AwardAchievement;
use Illuminate\Http\Request;
use App\Models\ChangeMakingProject;

class DashboardController extends Controller
{
    public function index(){
        $change_making_projects = ChangeMakingProject::get();
        $award_achievements = AwardAchievement::get();
        return view('admin.dashboard', [
            'change_making_projects' => $change_making_projects,
            'award_achievements' => $award_achievements
        ]);
    }
}
