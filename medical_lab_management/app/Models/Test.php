<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'notes',
        'normal_range',
        'test_name',
        'test_result',
        'medical_id',
        'patient_id',
        
    ];
    public function patient()
    {
       
        return $this->belongsTo(Patient::class, 'patient_id');

    }
    public function admin()
    {
       
        return $this->belongsTo(Admin::class, 'medical_id');

    }
    
}
