<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AwardAchievement extends Model
{
    use HasFactory;

    protected $table = "tb_award_achievements";
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'competition_name',
        'award_name',
        'image',
        'created_at',
        'updated_at'
    ];
}
