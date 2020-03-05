<?php

namespace Vayu\SharedModel;

use Illuminate\Database\Eloquent\Model;

class PointUsage extends Model
{
    protected $table = 'package_usage';

    protected $fillable = [
    	'user_id', 'amount', 'description'
    ];
}
