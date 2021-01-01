<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventStatus extends Model
{
    use HasFactory;
    protected $table = 'event_status';
    protected $primaryKey = 'eve_sta_id';
    protected $fillable = ['eve_sta_id','user_id','event_id','eve_sta_status'];
    protected $guard = [];
}
