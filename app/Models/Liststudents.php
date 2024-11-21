<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class liststudents extends Model
{
    protected $fillable = [
        "name",
        "classes",
        "major",
        "birthdate",
        "profile"
    ];
}
