<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $guarded = [];
    const DELETED_AT = 'company_deleted_date';
    const CREATED_AT = 'company_created_date';
    const UPDATED_AT = 'company_updated_date';
    protected $table = 'company';
    protected $primaryKey = 'company_id';

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
}
