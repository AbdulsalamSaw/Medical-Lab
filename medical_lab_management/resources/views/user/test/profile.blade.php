@extends('user.app.layout')
@section('title', 'My Profile')
@section('content')
<div class="profile">
    <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Name :</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$patient->first_name}} {{$patient->last_name}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email :</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$patient->email}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone :</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$patient->phone}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Age :</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$patient->age}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Gender :</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$patient->gender}}</p>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection