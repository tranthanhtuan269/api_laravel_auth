<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Orderable;

class Job extends Model
{
	use Orderable;
	
	protected $fillable = [
		'date_plan', 'start_at', 'done_at', 'status', 'plan_id', 'user_id'
    ];
    
    public function user(){
    	return $this->belongsTo(User::class);
    }
}
