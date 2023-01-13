<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobsStatus extends Model
{
    use HasFactory;
    protected $table = 'jobs_status';
    protected $primaryKey = 'jobs_status_id';
}
