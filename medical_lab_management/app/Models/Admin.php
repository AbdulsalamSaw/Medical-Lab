<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'phone',
        'address',
        'medical_name',


    ];
    public function patient()
    {
        return $this->hasMany(Patient::class, 'medical_id', 'id');

    }
    public function tests()
    {
        return $this->hasMany(Test::class, 'medical_id', 'id');

    }
    
    public $timestamps = false;

}
