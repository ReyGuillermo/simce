<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docsolicitados extends Model
{
    protected $table = 'ddsolicitados';

    protected $fillable = ['IdDso', 'IdTipDso','IdTsoDso','EstDso','FecDso'];

    protected $primaryKey = 'IdDso';

    public $timestamps = false;
    
    public function RDos_Doc()
    {
        return $this->belongsTo(Documentos::class, 'IdTipDso','IdTip');        
    }

    public function RelSolicitantes()
    {
        return $this->hasMany(Tsolicitantes::class, 'IdTso','IdTsoDso');        
    }
}
