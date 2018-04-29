<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
	use Orderable;
	
    protected $fillable = [
		'object', 'object_id', 'user_id', 'status'
    ];
    
    public function user(){
    	return $this->belongsTo(User::class);
    }
}
