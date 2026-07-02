<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class form_data extends Model
{
    protected $fillable = [
        'current_odometer',
        'previous_odometer',
        'last_oil_change_date',
    ];
}
