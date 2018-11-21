<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ssolicitante extends Model
{
    protected $table = 'tsolicitante';

    protected $fillable = ['IdUseSot', 'NuiSot','RazSot','DirSot', 'EmaSot','TelSot'];

    protected $primaryKey = 'IdUseSot';

    public $timestamps = false; 
}
