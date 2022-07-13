<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    
    protected $fillable = [
     
        'first_name',
        'last_name',
        'email',
        'password',
        'phone',
        'age',
        'gender',
        'medical_id',
     
    ];
    public function admin()
    {
       
        return $this->belongsTo(Admin::class, 'medical_id');

    }
    public function test()
    {
        return $this->hasMany(Test::class, 'patient_id', 'id');

    }
    public $timestamps = false;

}
