<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersApply extends Model
{
    use HasFactory;
    protected $table = 'users_apply';
    protected $primaryKey = 'users_apply_id';
}
