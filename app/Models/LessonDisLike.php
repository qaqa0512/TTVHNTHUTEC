<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LessonDisLike extends Model
{
    use HasFactory;
    protected $table = 'dislike_lesson';
    protected $primaryKey = 'dislike_lesson_id';
    protected $fillable = ['dislike_lesson_id','lesson_slug','user_id'];
    protected $guard = [];
}
