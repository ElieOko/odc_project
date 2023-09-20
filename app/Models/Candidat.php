<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    use HasFactory;
    protected $table = "TCandidats";
    public $timestamps = false;
    protected $fillable = [
        'fk_user',
        'fk_profession',
        'fk_niveau_etude',
        'nom_famille',
        'prenom',
        'gender',
        'photo',
        'date_naissance',
        'country',
    ];
}
