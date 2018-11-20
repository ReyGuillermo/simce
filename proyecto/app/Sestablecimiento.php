<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tsolicitantes extends Model
{
    protected $table = 'dtsolicitante';

    protected $fillable = ['IdTso', 'NomTso','DesTso'];

    protected $primaryKey = 'IdTso';

    public $timestamps = false;     
    
    public function RDocumentos(){
        return $this->belongsToMany(Documentos::class,'ddsolicitados','IdTsoDso','IdTipDso')->wherePivot('EstDso', 1);
    }            
}
