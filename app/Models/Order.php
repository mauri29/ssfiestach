<?php

namespace App\Models;

use Jenssegers\Date\Date;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user()
    {
    	return $this->belongsTo('App\Models\User');
    }
    public function channel()
    {
    	return $this->belongsTo('App\Models\User');
    }
    public function getCreatedAtAttribute($date)
    {
    	return new Date($date);
    }

}
