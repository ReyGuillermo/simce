<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol_user extends Model
{
    protected $table = 'role_user';

    protected $fillable = ['id', 'role_id','user_id'];

    protected $primaryKey = 'id';

    public $timestamps = false; 
    
}
