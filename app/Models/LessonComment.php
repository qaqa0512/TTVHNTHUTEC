<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LessonComment extends Model
{
    use HasFactory;
    protected $table = 'comment_lesson';
    protected $primaryKey = 'comment_lesson_id';
    protected $fillable = ['comment_lesson_id','user_id','lesson_slug'];
    protected $guard = [];
}
