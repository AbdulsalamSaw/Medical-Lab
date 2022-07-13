@extends('admin.app.layout')
@section('title', 'List Patient')
@section('page_title', 'List Patient')
@section('content')
<div class="adduser">
    <div class="row">
        <div class="col-mb-6 mb-2">
            <a href="{{route('addpatient')}}" class=" btn btn-dark">Add New User</a>
        </div>
        </div>    
    </div>
    <div class="card">
                <table class="table" id="datatablesSimple">
                    <thead>
                        <tr> 
                            <th scope="col">Email</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Age</th>
                            <th scope="col">Gender</th>
                            <th scope="col">View User</th>
                            <th scope="col">Delete User</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($patients as $patient)
                            <div class ="row"> 
                                <tr>
                                <td >{{$patient->email}}</td>
                                <td >{{{$patient->first_name}}}</td>
                                <td >{{$patient->last_name}}</td>
                                <td >{{$patient->phone}}</td>
                                <td >{{$patient->age}}</td>
                                <td >{{$patient->gender}}</td>
                                <td>
                                  <a href="{{route('patient.id',$patient->id)}}" class="col mb-1 btn btn-secondary">View</a>
                               </td>
                               <td>
                                 <a href="{{route('deletepatient.id',$patient->id)}}" class="col mb-1 btn btn-danger">Delete</a>
                              </td>
                              </tr>
                            </div>
                            @endforeach
                    </tbody>
            </table>
        </div>    
@endsection
