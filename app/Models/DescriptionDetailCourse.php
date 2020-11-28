<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DescriptionDetailCourse extends Model
{
    use HasFactory;
    protected $table = 'course';
    protected $primaryKey = 'id';
    protected $fillable = ['id','title','name','description','category','image','slug'];
    protected $guard = [];
}
