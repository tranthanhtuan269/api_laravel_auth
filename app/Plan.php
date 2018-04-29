<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
	use Orderable;
	
    protected $fillable = [
		'name', 'line', 'buyer_id', 'order_id', 'start_cut'
    ];
}
