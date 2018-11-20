<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docsolicitados extends Model
{
    protected $table = 'ddsolicitados';

    protected $fillable = ['IdDso', 'IdTipDso','IdTsoDso','EstDso','FecDso'];

    protected $primaryKey = 'IdDso';

    public $timestamps = false;
    
    public function RelDocumentos()
    {
        return $this->hasMany(Documentos::class, 'IdTip','IdTipDso');        
    }

    public function RelSolicitantes()
    {
        return $this->hasMany(Tsolicitantes::class, 'IdTso','IdTsoDso');        
    }
}
