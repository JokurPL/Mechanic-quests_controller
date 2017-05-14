<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quests extends Model
{
    protected $fillable = [

        'name',
        'content',
        'prize',
        'client',
        'tel',

    ];
}
