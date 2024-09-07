<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable=['startDate','endingDate','status','city','startCity','endingCity','customer_id','car_id','bookingType_id'];
}
