<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClubMember extends Model
{
    use HasFactory;
    protected $table = 'club_member';
    protected $primaryKey = 'club_member_id';
    protected $fillable = ['club_member_id','club_member_name','club_member_email','club_member_phone','club_category_id'];
    protected $guard = [];
}
