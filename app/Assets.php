<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assets extends Model
{
    protected $table = 'assets';
    protected $fillable = [
        'asset_name','status','created_at','updated_at','created_by','updated_by'
    ];
}
