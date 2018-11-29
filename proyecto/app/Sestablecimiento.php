<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sestablecimiento extends Model
{
    protected $table = 'testabsucu';

    protected $fillable = ['IdSuc', 'IdUsuSuc','DirEst','IdCiuEst','NomEst','IdPerSuc','IdTipSuc','MaiSuc'];

    protected $primaryKey = 'IdSuc';

    public $timestamps = false;
      
    public function RSuc_Ciu(){
        return $this->belongsTo(Dciudad::class,'IdCiuEst','IdCiu');
    }
}
