<?php

namespace App\Http\Controllers\Admin\Test;

use App\Http\Controllers\Admin\Controller;
use App\Models\Admin;
use App\Models\Patient;
use App\Models\Test;
use Illuminate\Http\Request;


class EditTestController extends Controller
{
    public function viewPage($id)
    {

        $data_test = Test::find($id);
        return view('admin.tests.edit',['datatest'=>$data_test]);
 
    }

    public function editTest(Request $request,$id)
    {
        $data_test = Test::find($id);

        $this->validate($request,[
              'test_name'=>'required|alpha|min:3|max:25',
              'normal_range'=>'required|min:3|max:25',
              'notes'=>'required|max:250',
              'test_result'=>'required|min:1|max:250',
          ]);

        $data_test->test_name= $request->test_name;
        $data_test->normal_range=$request->normal_range;
        $data_test->notes=$request->notes;
        $data_test->test_result=$request->test_result;
        $data_test->update();
             
        return redirect()->route('viewpagetest.id', ['id' => $data_test->patient_id]);
       
    }
        public function printTest($id)
        {
            $medical_id = session()->get('medical_id');
            $medical=Admin::find($medical_id);
            $tests = Test::find($id);
           
            $patient = Patient::get()->where('id',$tests->patient_id);
            
            $data=array($medical);
           
            array_push($data,$tests);
            return view('admin.tests.print',['data'=>$data],['patient'=>$patient[0]]);
            
        }
  

   

}
