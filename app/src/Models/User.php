<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    protected $table = 'users';
    protected $fillable = ['name','email','password'];
    protected $primaryKey = 'id';
    protected $dates = ['created_at', 'updated_at'];
}