@extends('admin.auth.index')
@section('title', 'Login Admin')
@section('content')
    <div class="box">
      <div class="col-lg-12 mb-3">
           <div class="myform form ">
               <div class="col-mb-12 mb-3 text-center">
                   <h1>Login Admin</h1>
               </div>
               <form action="{{route('login')}}" method ="POST">
                @csrf
                 <div class="col-md-12 mb-3">
                   <div class="form-group">
                      <label for="email">Email</label>
                       <input type="email" name="email" class="form-control" placeholder="Enter Email" value="{{old('email')}}" />
                   </div>
                   @error('email')
                       <div class="text-danger text-sm">{{$message}}</div>
                   @enderror
                 </div>
                <div class="col-md-12 mb-3 ">
                    <div class="form-group">
                       <label for="password">Password</label>
                          <input type="password" name="password"  class="form-control" placeholder="Enter Password" />
                      </div>
                      @error('password')
                      <div class="text-danger text-sm">{{$message}}</div>
                  @enderror
                </div>
               <div class="row">
                  <div class="col-mb-12 mb-3 text-center">
                      <input type="submit" class=" btn btn-block mybtn btn-primary tx-tfm" name="submit" value="Login" >
                  </div>
               </div>
                  <div class="row">
                      <div class="col-mb-12 mb-3">
                           <div class="form-group">
                              <p class="text-center">
                                  Don't have account?
                                  <a href="/admin/register">
                                      Sign up here
                                  </a>
                              </p>
                           </div>
                      </div>
                  </div>
               </form>
               <div class="row"> 
                <div class="text-danger text-sm">
                        @if (session('loginfailed'))
                           {{ session('loginfailed') }}
                        @endif
                </div>      
              </div>
           </div>
      </div>
  </div>
@endsection






