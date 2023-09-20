<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;
    protected $table = "TUser_roles";
    public $timestamps = false;
    protected $fillable = [
        'fk_user',
        'fk_role'
    ];
}
