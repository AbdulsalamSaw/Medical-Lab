<?php

namespace App\Http\Controllers\Admin\Api;

use App\Http\Controllers\Admin\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ApisController extends Controller
{
  
    public function createPatient(Request $request)
    {
       
        $patient = new Patient;
        $patient->first_name= $request->first_name;
        $patient->last_name= $request->last_name;
        $patient->email= $request->email;
        $patient->password=  Hash::make($request->password);
        $patient->age= $request->age;
        $patient->phone= $request->phone;
        $patient->gender= $request->gender;
        $patient->medical_id= $request->medical_id;
        $patient->save();

        if ($patient) {
            return response()->json([
                    'message' => 'Success',
                    'Data' => $patient   
                    ], 201); } 
        else 
        {
          return response()->json(['message' => 'Fail'], 400);
        }
    }

    public function getPatient($medical_id)
    {
        $patient = Patient::where('medical_id', $medical_id)->get();
        if (!sizeof($patient)==0) {
            $patient = Patient::where('medical_id', $medical_id)->get()->toJson();
            return response($patient, 200);
        } 
        else {
            return response()->json(["message" => "Patient not found"], 404);
        }
    }

            
    public function deletePatient($id) 
    {  
        $patient =Patient::find($id);
          if($patient) {
            $patient->delete();
            return response()->json(["message" => "Patient is  deleted"], 200);
        } else {
          return response()->json(["message" => "Patient not found"], 404);
        }
    }
}
        
