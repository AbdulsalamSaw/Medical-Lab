@extends('admin.auth.index')
@section('title', 'Register Admin')
@section('content')
<div class="register">
    <div class="col-12 text-center">
        <h1>Register</h1>
    </div>
    <form action="{{route('register')}}" method ="POST">
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
                    <label for="medical_name">Medical Name</label>
                    <input type="text" class="form-control rounded-0"  name="medical_name" placeholder="Medical" value="{{old('medical_name')}}" />
                    @error('medical_name')
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
                    <input type="password" class="form-control rounded-0"  name="password_confirmation" placeholder="Password" value="{{old('password')}}" />
                    @error('password')
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
                    <label for="address">Address</label>
                    <input type="address" class="form-control rounded-0"  name="address" placeholder="Nablus" value="{{old('address')}}" />
                    @error('address')
                    <div class="text-danger text-sm">{{$message}}</div>
                  @enderror
                </div>
            </div>
            <div class="row">
            <div class="col-md-12 mb-3">
                <input type="submit" value="Register" name="submit" class="btn btn-primary rounded-pill">
            </div>
        </div>
      </form>
</div>
@endsection