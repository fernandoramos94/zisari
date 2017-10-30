<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
   	protected $table = 'usuarios';
   	protected $guarded = [];

   	public function users()
    {
        return $this->belongsTo('App\User');
    }
}
