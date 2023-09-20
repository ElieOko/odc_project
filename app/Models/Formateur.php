<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formateur extends Model
{
    use HasFactory;
    protected $table = "TFormateurs";
    public $timestamps = false;
    protected $fillable = [
        'fk_user',
        'fk_specialite',
        'nom',
        'postnom',
        'prenom',
        'gender',
        'country',
        'experience',
        'photo',
        'description',
        'date_naissance',
    ];
}
