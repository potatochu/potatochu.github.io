<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];
    protected $primaryKey = 'users_id';
    const DELETED_AT = 'users_deleted_date';
    const CREATED_AT = 'users_created_date';
    const UPDATED_AT = 'users_updated_date';

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'users_password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'users_email_verified_at' => 'datetime',
    ];

    public function getAuthPassword()
    {
        return $this->users_password;
    }

    public function level()
    {
        return $this->belongsTo(Level::class, 'level_id');
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


}
