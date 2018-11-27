<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sempresas extends Model
{
    protected $table = 'tuserestab';

    protected $fillable = ['IdUsuEst', 'RazEst','DirEst','TelEst', 'EmaEst','NitEst'];

    protected $primaryKey = 'IdUseEst';

    public $timestamps = false; 
}
