<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class club_activity_dislike extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'club_activity_dislike';
    protected $primaryKey = 'club_activity_dislike_id';
    protected $fillable = ['club_activity_dislike_id','user_id','club_activity_id','club_category_id'];
    protected $guard = [];
}
