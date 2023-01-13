<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobsOccupation extends Model
{
    use HasFactory;
    protected $table = 'jobs_occupation';
    protected $primaryKey = 'jobs_occupation_id';
}
