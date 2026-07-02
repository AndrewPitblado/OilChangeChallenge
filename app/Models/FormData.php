<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormData extends Model
{
    protected $fillable = [
        'current_odometer',
        'previous_odometer',
        'last_oil_change_date',
    ];
    //Need to create a cast for the last_oil_change_date so it can be a date instead of a string, which allows for proper date comparisons for the results page.
    protected $casts = [
        'last_oil_change_date' => 'date',
    ];
}
