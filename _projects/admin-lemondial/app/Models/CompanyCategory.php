<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyCategory extends Model
{
    use HasFactory;
    protected $guarded = [];
    const DELETED_AT = 'company_category_deleted_date';
    const CREATED_AT = 'company_category_created_date';
    const UPDATED_AT = 'company_category_updated_date';
    protected $table = 'company_category';
    protected $primaryKey = 'company_category_id';

}
