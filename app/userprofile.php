<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userprofile extends Model
{
     protected $table = 'userprofile';
	 protected $fillable = ['field_id', 'field_value', 'user_id'];

	 public function user(){
		return $this->belongsTo('App\User');
	}
}
