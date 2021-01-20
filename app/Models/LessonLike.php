<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LessonLike extends Model
{
    use HasFactory;
    protected $table = 'like_lesson';
    protected $primaryKey = 'like_lesson_id';
    protected $fillable = ['like_lesson_id','lesson_slug','user_id'];
    protected $guard = [];
}
