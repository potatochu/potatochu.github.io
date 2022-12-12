<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersSkill extends Model
{
    use HasFactory;
    protected $table = 'users_skill';
    protected $primaryKey = 'users_skill_id';
}
