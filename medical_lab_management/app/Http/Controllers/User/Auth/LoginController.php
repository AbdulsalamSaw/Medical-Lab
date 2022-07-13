<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function viewPage()
    {
        return view('user.auth.login');
        
    }
    public function userLogin(Request $request)
    {

          $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required'

          ]);

            $user = Patient::where('email',$request->input('email'))->get();
            if(!sizeof($user)==0)
            {
                if(Hash::check($request->input('password'),$user[0]->password))
                {
                    $request->session()->put('email',$user[0]->email);
                    $request->session()->put('isPatient',true);
                    $request->session()->put('patient_id',$user[0]->id);
                    return redirect()->route('dashboard');
                }
                else
                {
                    return redirect('/user/login')->with('loginfailed',"Wrong password");

                }
            }else
            {
                return redirect('/user/login')->with('loginfailed',"The email entered is not available");

            }
                
    }
    public function logout()
    {
        session()->pull('email');
        session()->pull('isPatient');
        session()->pull('patient_id');
        return redirect()->route('homepage');

    }
}
