@extends('admin.app.layout')
@section('title', 'List Test')
@section('content')
<div id="print">
    <div class="row">
        <div class="col-4">
          <h6>
           Dr. {{$data[0]->first_name}} {{$data[0]->last_name}}
          </h6>
        </div>
        <div class="col-4">
            <h4>
             {{$data[0]->medical_name}}
          </h4>
        </div>
            <div class="col-4 ">
              <address>
                Address : {{$data[0]->address}}<br>
                Phone : {{$data[0]->phone}}<br>
                Email : {{$data[0]->email}}
              </address>
            </div>
            <hr >
    </div> 
    <div class="row">
        <div class="col-9">
            <address>
              Patient Name : {{$patient->first_name}} {{$patient->last_name}}<br>
              Phone : {{$patient->phone}}<br>
              Sex : {{$patient->gender}}<br>
              Age : {{$patient->age}}
            </address>
          </div>
        <hr >
      </div>
      <div class="row">
        <div class="col-12">
          <table class="table">
            <thead>
            <tr>
              <th>Test Name</th>
              <th>Result</th>
              <th>Normal Range</th>
              <th>Notes</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>{{$data[1]->test_name}}</td>
              <td>{{$data[1]->test_result}}</td>
              <td>{{$data[1]->normal_range}}</td>
              <td>{{$data[1]->notes}}</td>
            </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-7 mb-3">
            <button type="button" onclick="printTest('print')" id="print_page"  class="btn btn-outline-success"><i class="material-icons" data-toggle="tooltip">&#xe8ad;</i>
                Print </button>
            </div>
        <div class="date col-lg-5 mb-3">        
            Created at : {{$data[1]->created_at}}
        </div>
      </div>
</div>
@endsection

