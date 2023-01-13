<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyEmployees extends Model
{
    use HasFactory;
    protected $guarded = [];
    const DELETED_AT = 'company_employees_deleted_date';
    const CREATED_AT = 'company_employees_created_date';
    const UPDATED_AT = 'company_employees_updated_date';
    protected $table = 'company_employees';
    protected $primaryKey = 'company_employees_id';

}
