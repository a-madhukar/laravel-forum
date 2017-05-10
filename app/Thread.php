<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    

	public function path()
	{
		return sprintf("/threads/%s", $this->id); 
	}



	public function creator()
	{
		return $this->belongsTo(User::class, 'user_id'); 
	}



	public function replies()
	{
		return $this->hasMany(Reply::class); 
	}

}
