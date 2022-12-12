<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersProfileVerify extends Model
{
    use HasFactory;
    protected $guarded = [];
    const DELETED_AT = 'users_profile_verify_deleted_date';
    const CREATED_AT = 'users_profile_verify_created_date';
    const UPDATED_AT = 'users_profile_verify_updated_date';
    protected $table = 'users_profile_verify';
    protected $primaryKey = 'users_profile_verify_id';

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function status()
    {
        return $this->belongsTo(UsersVerifiedStatus::class, 'users_verified_status_id');
    }
}
