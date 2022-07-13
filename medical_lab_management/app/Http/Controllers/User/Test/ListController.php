<?php

namespace App\Http\Controllers\User\Test;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Models\Test;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function getTest()
    { 
        $patient_id = session()->get('patient_id');
        $patient = Patient::find($patient_id);
        $test = $patient->test;
        return view('user.test.list',['test'=>$test]);
    }

    public function myProfile()
    {
        $patient_id = session()->get('patient_id');
        $patient = Patient::find($patient_id);
        return view('user.test.profile',['patient'=>$patient]);
    }
    
}
