<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'data_inicio',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'data_inicio' => 'datetime',
    ];
}
