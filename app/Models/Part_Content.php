<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Part_Content extends Model
{
    use HasFactory;
    protected $table = 'part_content';
    protected $primaryKey = 'part_id';
    protected $fillable = ['part_id	','part_num','part_title','course_id'];
    protected $guard = [];
}