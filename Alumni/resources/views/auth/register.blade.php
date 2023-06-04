@extends('layouts.app')
<title>Create an Account</title>

@section('content')
<body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    
                                    <div class="card-body">
                                    <form class="user" method="POST" action="{{route('register')}}">
                                         @csrf
                                           <div class="form-floating mb-3">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <input type="text" class="form-control form-control-user @error('name') 
                                                        is-invalid @enderror" id="exampleInputFullName"
                                                            placeholder="Full Name" name="name" value="{{old('name')}}">
                                                        @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{$message}}</strong>
                                                        </span> 
                                                        @enderror
                                                        <label for="inputFirstName">First name</label>
                                                    </div>
                                                </div>
                                            <div class="form-floating mb-3">
                                            <input type="email" class="form-control form-control-user @error('email')
                                                is-invalid @enderror" id="exampleInputEmail"
                                                        placeholder="Email" name="email" value="{{old('email')}}">
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{$message}}</strong>
                                                    </span> 
                                                    @enderror
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <input type="password" class="form-control 
                                                        form-control-user @error('password') is-invalid 
                                                        @enderror" 
                                                        id="exampleInputPassword" placeholder="Password" name="password">
                                                        @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{$message}}</strong>
                                                        </span>
                                                        @enderror   
                                                        <label for="inputPassword">Password</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <input type="password" class="form-control 
                                                        form-control-user @error('password_confirmation') is-invalid 
                                                        @enderror"
                                                        id="exampleRepeatPassword"
                                                            placeholder="Repeat Password" name="password_confirmation">
                                                            @error('password_confirmation')
                                                            <span class="invalid-feedback" role="alert">
                                                            <strong>{{$message}}</strong>
                                                            </span>
                                                            @enderror
                                                        <label for="inputPasswordConfirm">Confirm Password</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><button type="submit" class="btn btn-primary btn-user btn-block">Register Account</button></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="{{ route('login') }}">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
@endsection