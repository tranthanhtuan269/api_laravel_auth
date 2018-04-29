<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Orderable;

class Sample extends Model
{
    use Orderable;
	
	protected $fillable = [
		'date_plan', 'go', 'sample_maker', 'pattern_status', 'sample_status', 'user_id'
    ];
    
    public function user(){
    	return $this->belongsTo(User::class);
    }
}
