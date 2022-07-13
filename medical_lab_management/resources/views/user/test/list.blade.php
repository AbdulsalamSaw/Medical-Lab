@extends('user.app.layout')
@section('title', 'View Test')
@section('content')
   <div class="profile">
     <h1>My Test</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Test Name</th>
            <th scope="col">Result</th>
            <th scope="col">Normal Range</th>
            <th scope="col">Date</th>
            <th scope="col">Notes</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($test as $data)
          <tr>
            <td>{{$data->test_name}}</td>
            <td>{{$data->test_result}}</td>
            <td>{{$data->normal_range}}</td>
            <td>{{$data->created_at}}</td>
            <td>{{$data->notes}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
   </div>
   <br>
   <br>
   <br>
@endsection