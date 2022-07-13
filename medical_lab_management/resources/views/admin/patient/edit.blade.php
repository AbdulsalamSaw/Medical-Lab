@extends('admin.app.layout')
@section('title', 'Update Patient')
@section('content')

<div class="register">
    <div class="titel mb-3">
        <h1>Update Patient</h1>
    </div>
    <form action="{{route('editpatient',$datapatient->id)}}" method ="POST">
        @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="first_name">First name</label>
                    <input type="text" class="form-control rounded-0"  name="first_name" placeholder="First Name" value="{{$datapatient->first_name}}" />
                    @error('first_name')
                    <div class="text-danger text-sm">{{$message}}</div>
                @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="last_name">Last name</label>
                    <input type="text" class="form-control rounded-0" name="last_name" placeholder="Last Name" value="{{$datapatient->last_name}}" />
                    @error('last_name')
                    <div class="text-danger text-sm">{{$message}}</div>
                @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control rounded-0"  name="email" placeholder="@mail" value="{{$datapatient->email}}" />
                    @error('email')
                    <div class="text-danger text-sm">{{$message}}</div>
                @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="phone">Phone</label>
                    <input type="tel" class="form-control rounded-0" maxlength="10" name="phone" placeholder="05-XXXX-XXXX" value="{{$datapatient->phone}}" />
                    @error('phone')
                    <div class="text-danger text-sm">{{$message}}</div>
                @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="age">Age</label>
                    <input type="number" class="form-control rounded-0" maxlength="3" name="age" placeholder="26" value="{{$datapatient->age}}" />
                    @error('age')
                    <div class="text-danger text-sm">{{$message}}</div>
                @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <label class="radio inline">
                        <input type="radio"  name="gender" value="Female" checked />
                        Female
                    </label>
                </div>
                <div class="col-md-6 mb-4">
                    <label class="radio inline">
                        <input type="radio"  name="gender" value="Male"/>
                        Male
                    </label>
                </div>
            </div>
            <div class="row">
            <div class="col-md-12 mb-3">
                <input type="submit" value="Update" name="submit" class="btn btn-primary rounded-pill">
            </div>
        </div>
      </form>
   </div>
@endsection