<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    use HasFactory;
    protected $table = "TDepartements";
    public $timestamps = false;
    protected $fillable = [
        'nom',
        'description'
    ];
}
