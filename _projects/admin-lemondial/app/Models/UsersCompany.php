<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersCompany extends Model
{
    use HasFactory;
    protected $table = 'users_company';
    protected $primaryKey = 'users_company_id';
}
