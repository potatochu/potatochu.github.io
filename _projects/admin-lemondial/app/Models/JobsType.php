<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobsType extends Model
{
    use HasFactory;
    protected $table = 'jobs_type';
    protected $primaryKey = 'jobs_type_id';
}
