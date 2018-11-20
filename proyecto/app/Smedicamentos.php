<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Smedicamentos extends Model
{
    protected $table = 'dmedicamentos';

    protected $fillable = ['IdMed', 'TisMed','NumMed','DciMed', 'ConMed','ForMed','ClaMed','UsoMed'];

    protected $primaryKey = 'IdMed';

    public $timestamps = false; 
}
