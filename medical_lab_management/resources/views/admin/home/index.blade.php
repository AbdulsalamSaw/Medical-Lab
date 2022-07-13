@extends('admin.app.layout')
@section('title', 'Home Page')
@section('content')
<div class="row">
    <div class="col-lg-4 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">Patient</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <div class="PatientNumber">
                    Number of registered patients : {{$patients}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="card bg-success text-white mb-4">
            <div class="card-body">Test</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <div class="TestNumber">
                    Number of tests performed : {{$tests}}
                </div>
            </div>
        </div>
    </div>
</div>




@endsection