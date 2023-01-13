<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobsExperience extends Model
{
    use HasFactory;
    protected $table = 'jobs_experience';
    protected $primaryKey = 'jobs_experience_id';
}
