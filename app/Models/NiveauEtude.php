<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NiveauEtude extends Model
{
    use HasFactory;
    protected $table = "TNiveau_etudes";
    public $timestamps = false;
    protected $fillable = [
        'nom',
    ];
}
