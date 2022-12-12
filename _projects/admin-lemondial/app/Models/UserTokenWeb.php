<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersTokenWeb extends Model
{
    use HasFactory;
    protected $table = 'users_token_web';
    protected $primaryKey = 'users_token_web_id';
}
