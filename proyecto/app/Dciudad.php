<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dciudad extends Model
{
    protected $table = 'dciudades';

    protected $fillable = ['IdCiu', 'NomCiu'];

    protected $primaryKey = 'IdCiu';

    public $timestamps = false; 
    
}
