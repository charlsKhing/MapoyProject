@extends('layouts.app')
<title>Log in</title>
@section('content')
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                    <form class="user" method="POST" action="{{ route('login') }}">
                                        @csrf
                                            <div class="form-floating mb-3">
                                            <input type="email" class="form-control form-control-user  @error('email') is-invalid @enderror"
                                            id="exampleInputEmail" aria-describedby="emailHelp"
                                            placeholder="Enter Email Address" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                   
                                            <div class="form-floating mb-3">
                                            <input id="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" placeholder="Enter Password" name="password" autocomplete="Password">
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                 
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">  
                                                <form class="user" method="POST" action="{{ route('login') }}">
                                                    @csrf
                                                    <button class="btn btn-primary ">
                                                    Login
                                                </button>
                                                </form>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="{{ route('register') }}">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>

@endsection
<!--<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>HTML5 Login Form with validation Example</title>
  <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>
<body>

<div id="login-form-wrap">
  <h2>Login</h2>
  <form id="login-form">
    <p>
    <input type="text" id="username" name="username" placeholder="Username" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="email" id="email" name="email" placeholder="Email Address" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="submit" id="login" value="Login">
    </p>
  </form>
  <div id="create-account-wrap">
    <p>Not a member? <a href="#">Create Account</a><p>
  </div>
</div>
  
</body>
</html> -->






