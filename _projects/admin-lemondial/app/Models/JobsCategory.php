<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobsCategory extends Model
{
    use HasFactory;
    protected $table = 'jobs_category';
    protected $primaryKey = 'jobs_category_id';
}
