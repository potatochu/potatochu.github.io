<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersRating extends Model
{
    use HasFactory;
    protected $table = 'users_rating';
    protected $primaryKey = 'users_rating_id';
}
