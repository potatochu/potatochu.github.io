<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersEducation extends Model
{
    use HasFactory;
    protected $table = 'users_education';
    protected $primaryKey = 'users_education_id';
}
