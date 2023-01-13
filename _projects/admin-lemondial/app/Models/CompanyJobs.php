<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyJobs extends Model
{
    use HasFactory;
    protected $guarded = [];
    const DELETED_AT = 'company_jobs_deleted_date';
    const CREATED_AT = 'company_jobs_created_date';
    const UPDATED_AT = 'company_jobs_updated_date';
    protected $table = 'company_jobs';
    protected $primaryKey = 'company_jobs_id';

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function states()
    {
        return $this->belongsTo(States::class, 'states_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function occupation()
    {
        return $this->belongsTo(JobsOccupation::class, 'jobs_occupation_id');
    }

    public function type()
    {
        return $this->belongsTo(JobsType::class, 'jobs_type_id');
    }

    public function category()
    {
        return $this->belongsTo(JobsCategory::class, 'jobs_category_id');
    }

    public function experience()
    {
        return $this->belongsTo(JobsExperience::class, 'jobs_experience_id');
    }

    public function verified()
    {
        return $this->belongsTo(CompanyJobsVerifiedStatus::class, 'company_jobs_verified_status_id');
    }

    public function active()
    {
        return $this->belongsTo(JobsStatus::class, 'jobs_status_id');
    }

    public function degrees()
    {
        return $this->belongsTo(Degrees::class, 'degrees_id');
    }

    public function employeeLevel()
    {
        return $this->belongsTo(EmployeeLevel::class, 'employee_level_id');
    }
}
