<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;
    protected $table = 'posts_comments';
    protected $primaryKey = 'comment_id';
    protected $fillable = ['comment_id','user_id','course_id','comment_content'];
    protected $guard = [];
}
