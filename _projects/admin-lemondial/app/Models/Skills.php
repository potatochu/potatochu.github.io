<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    use HasFactory;
    protected $guarded = [];
    const DELETED_AT = 'skills_deleted_date';
    const CREATED_AT = 'skills_created_date';
    const UPDATED_AT = 'skills_updated_date';
    protected $table = 'skills';
    protected $primaryKey = 'skills_id';

}
