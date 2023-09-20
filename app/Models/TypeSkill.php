<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeSkill extends Model
{
    use HasFactory;
    protected $table = "TType_skills";
    public $timestamps = false;
    protected $fillable = [
        'nom'
    ];
}
