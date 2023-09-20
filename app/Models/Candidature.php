<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidature extends Model
{
    use HasFactory;
    protected $table = "TCandidatures";
    public $timestamps = false;
    protected $fillable = [
        'fk_candidat',
        'fk_activity',
        'curriculum_vitae',
        'telephone',
        'description',
        'is_participate'
    ];
}
