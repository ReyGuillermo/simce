<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Didentificacion extends Model
{
    protected $table = 'dtidentidad';

    protected $fillable = ['IdTid', 'NomTid','DesTid'];

    protected $primaryKey = 'IdTid';

    public $timestamps = false; 
    
}
