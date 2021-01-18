<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClubCategory extends Model
{
    use HasFactory;
    protected $table = 'club';
    protected $primaryKey = 'club_id';
    protected $fillable = ['club_id','club_title','club_info','club_category_id'];
    protected $guard = [];
}
