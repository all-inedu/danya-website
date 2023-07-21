<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\AwardAchievement;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
    function index(): View
    {
        // Get all award & achievements from database
        // Order by updated at from newest to oldest
        $awardAchievements = AwardAchievement::orderBy('updated_at', 'desc')->get();

        return view('user.achievements', [
            'award_achievements' => $awardAchievements,
        ]);
    }
}
