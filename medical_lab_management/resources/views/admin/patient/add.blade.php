@extends('admin.app.layout')
@section('title', 'Add New Patien')
@section('content')

<div class="register">
    <div class="titel">
        <h1>Add New Patient</h1>
    </div>
    <form action="{{route('addpatient')}}" method ="POST">
        @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="first_name">First name</label>
                    <input type="text" class="form-control rounded-0"  name="first_name" placeholder="First Name" value="{{old('first_name')}}" />
                    @error('first_name')
                    <div class="text-danger text-sm">{{$message}}</div>
                @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="last_name">Last name</label>
                    <input type="text" class="form-control rounded-0" name="last_name" placeholder="Last Name" value="{{old('last_name')}}" />
                    @error('last_name')
                    <div class="text-danger text-sm">{{$message}}</div>
                @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control rounded-0"  name="email" placeholder="@mail" value="{{old('email')}}" />
                    @error('email')
                    <div class="text-danger text-sm">{{$message}}</div>
                @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="password">Password</label>
                    <input type="password" class="form-control rounded-0"  name="password" placeholder="Password" value="{{old('password')}}" />
                    @error('password')
                    <div class="text-danger text-sm">{{$message}}</div>
                @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" class="form-control rounded-0"  name="password_confirmation" placeholder="Password"  value="{{old('confirmpassword')}}" />
                    @error('confirmpassword')
                    <div class="text-danger text-sm">{{$message}}</div>
                @enderror
                </div>
            </div> 
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="phone">Phone</label>
                    <input type="tel" class="form-control rounded-0" maxlength="10" name="phone" placeholder="05-XXXX-XXXX" value="{{old('phone')}}" />
                    @error('phone')
                    <div class="text-danger text-sm">{{$message}}</div>
                @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="age">Age</label>
                    <input type="number" class="form-control rounded-0" maxlength="3" name="age" placeholder="26" value="{{old('age')}}" />
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
                        <input type="radio"  name="gender" value="Male"   />
                        Male
                    </label>
                </div>
            </div>
            <div class="row">
            <div class="col-md-12 mb-3">
                <input type="submit" value="submit" name="submit" class="btn btn-primary rounded-pill">
            </div>
        </div>
      </form>
   </div>
@endsection