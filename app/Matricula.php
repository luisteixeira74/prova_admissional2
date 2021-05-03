<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Matricula extends Model
{
    /**
     * Get the nome from aluno
     */
    public function getNomeAluno($id)
    {
        return Aluno::find($id)->nome;
    }

    /**
     * Get the nome from curso
     */
    public function getCursoNome($id)
    {
        return Curso::find($id)->nome;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'curso_id', 'aluno_id', 'ativo', 'data_admissao',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'data_admissao' => 'datetime',
    ];
}
