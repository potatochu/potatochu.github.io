<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersSearch extends Model
{
    use HasFactory;
    protected $table = 'users_search';
    protected $primaryKey = 'users_search_id';
}
