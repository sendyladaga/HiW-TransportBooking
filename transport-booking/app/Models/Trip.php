<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $fillable = ['trip_reference', 'status', 'trip_type', 'pickup_location', 'destination'];
}
