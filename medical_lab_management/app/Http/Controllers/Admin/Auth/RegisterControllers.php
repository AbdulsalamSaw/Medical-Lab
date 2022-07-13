<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Admin\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterControllers extends Controller
{
    public function index()
    {
        return view('admin.auth.register');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'first_name'=>'required|alpha|min:3|max:20',
            'last_name'=>'required|alpha|min:3|max:20',
            'email'=>'required|email|unique:admins',
            'password'=>'required|min:6|max:25|confirmed',
            'phone'=>'required|numeric|digits:10|regex:/(59)/i',
            'address'=>'required|min:3',
            'medical_name'=>'required|min:3|max:20'
          ]);

          $admin=[
            'first_name'=> $request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'password'=> Hash::make( $request->password),
            'phone'=>$request->phone,
            'address'=>$request->address,
            'medical_name'=>$request->medical_name,
        ];
        Admin::create($admin);
        return redirect('admin/login');
    }
}
