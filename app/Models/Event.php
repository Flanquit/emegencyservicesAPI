<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory; 
    protected $fillable = [
        'title',
        'startDate',
        'endDate',
        'startTime',
        'endTime',
        'description',
        'imageUrl',
        'city', 
        'country',
        'address', 
        'googleLocation',
        'promoter_id',
        'eventType',

    ];
    
}
