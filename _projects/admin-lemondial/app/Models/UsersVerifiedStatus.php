<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersVerifiedStatus extends Model
{
    use HasFactory;
    protected $table = 'users_verified_status';
    protected $primaryKey = 'users_verified_status_id';
}
