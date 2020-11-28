<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DescriptionDetailCourse extends Model
{
    use HasFactory;
    protected $table = 'detail_course';
    protected $primaryKey = 'detail_id';
    protected $fillable = ['detail_id','detail_des_name','detail_des_course','detail_des_instructor','detail_des_request','detail_des_rate','course_id'];
    protected $guard = [];
}
