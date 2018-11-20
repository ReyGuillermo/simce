<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dfuncionarios extends Model
{
    protected $table = 'dtfuncionario';

    protected $fillable = ['IdTfu', 'TipTfu','DesTfu'];

    protected $primaryKey = 'IdTfu';

    public $timestamps = false; 
}
