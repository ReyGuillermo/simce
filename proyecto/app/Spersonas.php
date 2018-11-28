<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spersonas extends Model
{
    protected $table = 'tpersonas';

    protected $fillable = ['IdPer', 'PnoPer','SnoPer','PapPer', 'SapPer','TipPer','NuiPer','TelPer','EmaPer'];

    protected $primaryKey = 'IdPer';

    public $timestamps = false; 
}
