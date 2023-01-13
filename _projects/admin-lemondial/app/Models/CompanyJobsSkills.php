<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyJobsSkills extends Model
{
    use HasFactory;
    protected $guarded = [];
    const DELETED_AT = 'company_jobs_skills_deleted_date';
    const CREATED_AT = 'company_jobs_skills_created_date';
    const UPDATED_AT = 'company_jobs_skills_updated_date';
    protected $table = 'company_jobs_skills';
    protected $primaryKey = 'company_jobs_skills_id';

    public function job()
    {
        return $this->belongsTo(CompanyJobs::class, 'company_jobs_id');
    }

    public function skill()
    {
        return $this->belongsTo(Skills::class, 'skills_id');
    }
}
