<?php

namespace App\Http\Controllers;

use App\Models\AwardAchievement;
use Illuminate\Http\Request;
use App\Models\ChangeMakingProject;
use App\Models\SpeakingOpportunities;

class DashboardController extends Controller
{
    public function index(){
        $change_making_projects = ChangeMakingProject::get();
        $award_achievements = AwardAchievement::get();
        $speaking_opportunities = SpeakingOpportunities::get();
        return view('admin.dashboard', [
            'change_making_projects' => $change_making_projects,
            'award_achievements' => $award_achievements,
            'speaking_opportunities' => $speaking_opportunities,
        ]);
    }
}
