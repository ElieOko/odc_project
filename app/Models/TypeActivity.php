<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeActivity extends Model
{
    use HasFactory;
    protected $table = "TType_activities";
    public $timestamps = false;
    protected $fillable = [
        'nom',
        'description'
    ];
}
