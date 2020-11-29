<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $table = 'lesson';
    protected $primaryKey = 'lesson_id';
    protected $fillable = ['lesson_id','lesson_title','lesson_video','part_id','course_id'];
    protected $guard = [];
}
