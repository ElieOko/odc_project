<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    use HasFactory;
    protected $table = "TCertifications";
    public $timestamps = false;
    protected $fillable = [
        'fk_activity_candidat',
        'status'
    ];
}
