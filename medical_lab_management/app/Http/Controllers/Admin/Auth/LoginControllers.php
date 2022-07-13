<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Admin\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginControllers extends Controller
{
    public function viewPage()
    {
        return view('admin.auth.login');
        
    }
    public function adminLogin(Request $request)
    {

          $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required'

          ]);
          

            $users = Admin::where('email',$request->input('email'))->get();
            if(!sizeof($users)==0)
            {
                if(Hash::check($request->input('password'),$users[0]->password))
                {
                    $request->session()->put('email', $users[0]->email);
                    $request->session()->put('isAdmin',true);
                    $request->session()->put('medical_id',$users[0]->id);

                    return redirect()->route('home');
                }
                else
                {
                    return redirect('admin/login')->with('loginfailed',"Wrong password");
                }
            }else
            {
                return redirect('admin/login')->with('loginfailed',"The email entered is not available");
            }
                
    }
    public function logout()
    {
        session()->pull('email');
        session()->pull('medical_id');
        session()->pull('idAdmin');
        return redirect()->route('homepage');

    }
    
}
