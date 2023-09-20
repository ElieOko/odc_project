<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;
    protected $table = "TEvaluations";
    public $timestamps = false;
    protected $fillable = [
        'fk_user',
        'fk_activity_candidat',
        'evaluation_remote',
        'evaluation_local',
    ];
}
