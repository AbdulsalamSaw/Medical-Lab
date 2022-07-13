<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function viewPage()
    {  
        $medical_id = session()->get('medical_id');
        $user = Admin::find($medical_id);
        $num_patient = sizeof($user->patient);
        $num_test=sizeof($user->tests);
        return view('admin.home.index',['patients'=>$num_patient],['tests'=>$num_test]);
    }


}
