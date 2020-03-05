<?php

namespace Vayu\SharedModel;

use Illuminate\Database\Eloquent\Model;

class PointUsage extends Model
{
    protected $table = 'point_usage';

    protected $fillable = [
    	'user_id', 'amount', 'description'
    ];
}
