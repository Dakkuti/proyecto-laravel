<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';
	
	// Relación de Muchos a Uno
	public function user(){
		return $this->belongsTo('App\User', 'user_id');
	}
	
}
