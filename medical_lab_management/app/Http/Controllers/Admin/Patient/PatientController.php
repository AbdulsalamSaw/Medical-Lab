<?php

namespace App\Http\Controllers\Admin\Patient;

use App\Http\Controllers\Admin\Controller;
use App\Models\Admin;
use App\Models\Patient;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class PatientController extends Controller
{
    public function viewPagePatient()
    {
            return view('admin.patient.add');
        
    }


   public function addPatient(Request $request)
   {
        $medical_id = session()->get('medical_id');
       $this->validate($request,[
            'first_name'=>'required|alpha|min:3|max:20',
            'last_name'=>'required|alpha|min:3|max:20',
            'email'=>'required|email|unique:patients',
            'password'=>'required|min:6|max:25|confirmed',
            'phone'=>'required|numeric|digits:10|regex:/(059)/i',
            'age'=>'required|numeric',
            'gender'=> 'required|in:Male,Female' 
        ]);

        $patient=[
                'first_name'=> $request->first_name,
                'last_name'=>$request->last_name,
                'email'=>$request->email,
                'password'=> Hash::make($request->password),
                'age'=>$request->age,
                'phone'=>$request->phone,
                'gender'=>$request->gender,
                'medical_id'=>($medical_id)
            ];
             Patient::create($patient);
             return redirect()->route('listpatient');

           
    }
    public function pageEditPatient($id)
    {

        $data_patient = Patient::find($id);
        return view('admin.patient.edit',['datapatient'=>$data_patient]);
 
    }

    public function editPatient(Request $request,$id)
    {
       $data_patient = Patient::find($id);
       $this->validate($request,[
            'first_name'=>'required|alpha|min:3|max:20',
            'last_name'=>'required|alpha|min:3|max:20',
            'email'=>[
                'required',
                Rule::unique('patients')->ignore($data_patient->id),
            ],
            'phone'=>'required|numeric|digits:10|regex:/(059)/i',
            'age'=>'required|numeric',
            'gender'=> 'required|in:Male,Female' 
          ]);

        $data_patient->first_name= $request->first_name;
        $data_patient->last_name=$request->last_name;
        $data_patient->email=$request->email;
        $data_patient->phone=$request->phone;
        $data_patient->age=$request->age;
        $data_patient->gender=$request->gender;

        $data_patient->update();
             
        return redirect()->route('viewpagetest.id', ['id' => $data_patient->id]);
       
    }
    public function getPatient()
    {
      
        $medical_id = session()->get('medical_id');
        $user = Admin::find($medical_id);
        $patient = $user->patient;
        return view('admin.patient.index',['patients'=>$patient]);
    }

    public function viewPage($patient_id)
    {
   
       $patients = Patient::find($patient_id);
       $tests = $patients->test;
       
       return view('admin.tests.index',['tests'=>$tests],['patients'=>$patients]);
    }
   
   
   
    public function viewPageTest($patient_id)
    {
          return view('admin.tests.add',['patient_id'=>$patient_id]);
    }


 public function addTest(Request $request,$patient_id)
 {
        $medical_id = session()->get('medical_id');
        $this->validate($request,[
              'test_name'=>'required|alpha|min:3|max:25',
              'normal_range'=>'required|min:3|max:25',
              'notes'=>'required|max:250',
              'test_result'=>'required|min:1|max:250',
          ]);

          $tests=[
                  'test_name'=> $request->test_name,
                  'normal_range'=>$request->normal_range,
                  'notes'=>$request->notes,
                  'test_result'=>$request->test_result,
                  'medical_id'=>($medical_id),
                  'patient_id'=>($patient_id)
              ];
              Test::create($tests);
              return redirect()->route('viewpagetest.id', ['id' => $patient_id]);

          }

          public function deleteTest($test_id)
          {
              $test = Test::find($test_id);
              $patient_id=$test->patient_id;
              $test->delete();
              return redirect()->route('viewpagetest.id',['id' => $patient_id]);;
          }

          public function deletePatient($id)
          {
              $patient =Patient::find($id);
              $patient->delete();
              return redirect()->route('listpatient');;

          }
}
