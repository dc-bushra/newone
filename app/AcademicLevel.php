<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcademicLevel extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
    ];
}
