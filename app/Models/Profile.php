<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table = 'profile';
    protected $primaryKey = 'profile_id';
    protected $fillable = ['profile_id ','user_id','profile_name','profile_date','profile_phone','profile_avatar'];
    protected $guard = [];
}
