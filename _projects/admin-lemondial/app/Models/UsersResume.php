<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersResume extends Model
{
    use HasFactory;
    protected $table = 'users_resume';
    protected $primaryKey = 'users_resume_id';
}
