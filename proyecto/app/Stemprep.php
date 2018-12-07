<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stemprep extends Model
{
    protected $table = 'temprep';

    protected $fillable = ['IdRep', 'IdPerRep','IdUsuRep','FecRep','FeuRep'];

    protected $primaryKey = 'IdRep';

    public $timestamps = false; 

    public function RRep_Per(){
        return $this->belongsTo(Spersonas::class,'IdPerRep','IdPer');
    }
}
