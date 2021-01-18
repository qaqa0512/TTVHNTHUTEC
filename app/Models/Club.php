<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;
    protected $table = 'club_category';
    protected $primaryKey = 'club_category_id';
    protected $fillable = ['club_category_id','club_category_title','club_category_image','club_category_slug'];
    protected $guard = [];
}
