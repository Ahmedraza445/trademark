<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'users';

    protected $primaryKey = 'id'; // Replace 'custom_id' with your actual primary key column name

    protected $fillable = [
        'id',
        'name',
        'email',
        'country_code',
        'phone_number',
        'registration_status',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function hasSubmittedRegistration()
    {
        return $this->registration_status;
    }
}
