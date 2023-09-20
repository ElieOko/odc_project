<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presence extends Model
{
    use HasFactory;
    protected $table = "TPresences";
    public $timestamps = false;
    protected $fillable = [
        'fk_activity_candidat',
        'status'
    ];
}
