<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{

    protected $fillable = ['titre','code', 'ext','user_id'];

	public function user() 
	{
		return $this->belongsTo('App\User');
	}

}