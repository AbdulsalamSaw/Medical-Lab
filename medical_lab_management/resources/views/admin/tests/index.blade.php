@extends('admin.app.layout')
@section('title', 'List Test')
@section('content')
<div class="viewpatient">
    <div class="Name">
        <div class="row">
            <div class="col-md-9 mb-1">
                <h3>{{$patients->first_name}} {{$patients->last_name}}</h3>
             </div>
             <div class="col-md-3 mb-3">
                <a href="{{route('addtests.id',$patients->id)}}" class=" btn btn-dark">Add Test</a>
                <a href="{{route('editpatient.id',$patients->id)}}" class=" btn btn-dark" data-toggle="modal">Edit</a>
            </div>
        </div>
    </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="email">Email : {{$patients->email}} </label>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="phone">Phone : {{$patients->phone}} </label>
                </div>           
                <div class="col-md-6 mb-3">
                    <label for="age">Age : {{$patients->age}} </label>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="gender">Gender : {{$patients->gender}} </label>
                </div>
            </div>
   </div>
   <div class="viewpatient">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Test Name</th>
            <th scope="col">Result</th>
            <th scope="col">Normal Range</th>
            <th scope="col">Date</th>
            <th scope="col">Notes</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($tests as $test)
          <tr>
            <td>{{$test->test_name}}</td>
            <td>{{$test->test_result}}</td>
            <td>{{$test->normal_range}}</td>
            <td>{{$test->created_at}}</td>
            <td>{{$test->notes}}</td>
            <td>
                <a href="{{route('printtest.id',$test->id)}}" class="print" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Print">&#xe8ad;</i></a>
                <a href="{{route('edittest.id',$test->id)}}" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                <a href="{{route('deletetest.id',$test->id)}}" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
   </div>


@endsection