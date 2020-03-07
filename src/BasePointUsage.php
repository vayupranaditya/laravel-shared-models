<?php

namespace Vayu\Basemodel;

use Illuminate\Database\Eloquent\Model;

class BasePointUsage extends Model
{
    protected $table = 'point_usage';

    protected $fillable = [
    	'user_id', 'amount', 'description'
    ];

    public function user() {
    	return $this->belongsTo(User::class, 'user_id');
    }
}
