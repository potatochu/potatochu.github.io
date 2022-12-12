<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersBookmark extends Model
{
    use HasFactory;
    protected $table = 'users_bookmark';
    protected $primaryKey = 'users_bookmark_id';
}
