<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $table = 'event';
    protected $primaryKey = 'event_id';
    protected $fillable = ['event_id','event_title','event_name','event_image','event_date_time'];
    protected $guard = [];
    
}
