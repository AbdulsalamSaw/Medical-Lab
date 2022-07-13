@extends('admin.app.layout')
@section('title', 'Add Test')
@section('content')
<div class="register">
    <div class="titel">
        <h1>Add Test</h1>
    </div>
    <form action="{{route('addtests.id',$patient_id)}}" method ="POST">
        @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="test_name">Test Name</label>
                    <input type="text" class="form-control rounded-0"  name="test_name" placeholder="Cholesterol" value="{{old('test_name')}}" />
                    @error('test_name')
                    <div class="text-danger text-sm">{{$message}}</div>
                @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="test_result">Result</label>
                    <input type="text" class="form-control rounded-0" name="test_result" placeholder="399 (High)" value="{{old('test_result')}}" />
                    @error('test_result')
                    <div class="text-danger text-sm">{{$message}}</div>
                @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="normal_range">Normal Range</label>
                    <input type="text" class="form-control rounded-0"  name="normal_range" placeholder="150 - 200" value="{{old('normal_range')}}" />
                    @error('normal_range')
                    <div class="text-danger text-sm">{{$message}}</div>
                @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="notes">Notes</label>
                    <input type="text" class="form-control rounded-0"  name="notes" placeholder="Unit mg/dL" value="{{old('notes')}}" />
                    @error('notes')
                    <div class="text-danger text-sm">{{$message}}</div>
                @enderror
                </div>
            </div>
            <div class="row">
            <div class="col-md-12 mb-3">
                <input type="submit" value="Add Test" name="submit" class="btn btn-primary rounded-pill">
            </div>
        </div>
      </form>
   </div>

@endsection