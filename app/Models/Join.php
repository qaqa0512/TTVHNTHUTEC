<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Join extends Model
{
    use HasFactory;
    protected $table = 'joined';
    protected $primaryKey = 'joined_id';
    protected $fillable = ['joined_id','user_id','event_id'];
    protected $guard = [];
}
