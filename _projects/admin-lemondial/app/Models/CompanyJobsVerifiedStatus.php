<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyJobsVerifiedStatus extends Model
{
    use HasFactory;
    protected $table = 'company_jobs_verified_status';
    protected $primaryKey = 'company_jobs_verified_status_id';
}
