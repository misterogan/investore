<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementRisk extends Model
{
    protected $table = 'management_risk';
    protected $fillable = [
        'management_risk','status','created_at','updated_at','created_by','updated_by'
    ];
}
