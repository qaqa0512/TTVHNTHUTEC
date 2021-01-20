<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'admin_login';
    protected $primaryKey = 'admin_id';
    protected $fillable = ['admin_id','admin_name','admin_email','admin_password'];

    public function role()
    {
        return $this->belongsTo('App\Role');
    }
}
