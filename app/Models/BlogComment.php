<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model
{
    use HasFactory;
    protected $table = 'blog_comment';
    protected $primaryKey = 'blog_comment_id';
    protected $fillable = ['blog_comment_id','user_id','blog_id','blog_comment_content'];
    protected $guard = [];
}
