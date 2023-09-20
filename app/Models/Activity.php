<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $table = "TActivities";
    public $timestamps = false;
    protected $fillable = [
        'nom',
        'description',
        'date_debut',
        'date_fin',
        'status',
        'localisation',
        'nombre_place',
        'mode_apprentissage',
        'fk_formateur',
        'fk_departement',
        'fk_type_activity',
    ];
}
