<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityCandidat extends Model
{
    use HasFactory;
    protected $table = "TActivity_candidats";
    public $timestamps = true;
    protected $fillable = [
        'fk_activity',
        'fk_candidat'
    ];
}
