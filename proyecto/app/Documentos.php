<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documentos extends Model
{
    protected $table = 'dtdocumento';

    protected $fillable = ['IdTip', 'NomTip','DesTip'];

    protected $primaryKey = 'IdTip';

    public $timestamps = false; 

    public function RSolicitantes(){
        return $this->belongsToMany(Tsolicitantes::class,'ddsolicitados','IdTipDso','IdTsoDso');
    } 
}
