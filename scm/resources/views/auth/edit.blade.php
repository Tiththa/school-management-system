@extends('layouts.main')
<title>Update Profile | Turbo.lk</title>
    
   
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

<style >
    input::placeholder {
        color: red !important;
        opacity: 0.5 !important;
        font-weight: bold !important;
    }
</style>
    
</head>
@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Enter Name" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" placeholder="Enter Username" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phno" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">+94</span>
                                    </div>
                                <input type="text" class="form-control" placeholder="Phone Number" class="form-control{{ $errors->has('phno') ? ' is-invalid' : '' }}" name="ph_no" value="{{ old('phno') }}" required>
                                </div>
                                @if ($errors->has('phno'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phno') }}</strong>
                                    </span>
                                @endif
                            </div>

                            
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->




 <div class="limiter">
        <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
            <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
                <form class="login100-form validate-form flex-sb flex-w" method="POST" action="{{ route('edit') }}">
                    @csrf
                    
                    <div class="wrap-input100 validate-input" data-validate = "Name is required">
                        <input class="input100 form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name" placeholder="Joshua Perera" value="{{ Auth::user()->name }}">
                        <span class="focus-input100"></span>
                        @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                    </div>

                    <div class="p-t-31 p-b-9">
                        <span class="txt1">
                            Username 
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate = "Username is required">
                        <input class="input100 form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" type="text" name="username"   value="{{ Auth::user()->username }}" required placeholder="Joshua56">
                        <span class="focus-input100"></span>
                        @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                    </div>
                    
                    <div class="p-t-31 p-b-9">
                        <span class="txt1">
                            Email Address
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate = "Email is required">
                        <input class="input100 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" placeholder=" joshua@example.com" value="{{ Auth::user()->email }}" >
                        <span class="focus-input100"></span>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                    </div>

                    <div class="p-t-31 p-b-9">
                        <span class="txt1">
                            Phone Number
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate = "Phone Number is required">
                        <div class="input-group-prepend">
                                      <span class="input-group-text text-white" style="background-color: #0088cc; font-weight: bold;">+94</span>
                                    
                        <input class="input100 form-control{{ $errors->has('phno') ? ' is-invalid' : '' }}" type="text" name="phno" placeholder="771234567"></div>
                        <span class="focus-input100"></span>
                        @if ($errors->has('phno'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phno') }}</strong>
                                    </span>
                                @endif
                    </div>

                    <div class="p-t-13 p-b-9">
                        <span class="txt1">
                            Password
                        </span>

                        
                    </div>
                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <input class="input100 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" id="password" >
                        <input  type="checkbox" onclick="myFunctionf()" style="height: 20px; width: 20px; margin-top: 10px; font-size: 300px;" id="chk1">
                        <label for="chk1" style="font-size: 16px; "><strong>Show Password</strong></label>
                        <span class="focus-input100"></span>
                        @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                    </div>

                    <div class="p-t-13 p-b-9">
                        <span class="txt1">
                           Confirm Password
                        </span>

                        
                    </div>
                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <input class="input100" type="password"  id="password-confirm"  name="password_confirmation" >
                        <input type="checkbox" onclick="myFunction()" style="height: 20px; width: 20px; margin-top: 10px; font-size: 300px;" id="chk2">
                        <label for="chk2" style="font-size: 16px; "><strong>Show Password</strong></label>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-login100-form-btn m-t-17">
                        <button class="login100-form-btn" type="submit">
                            Update Profile
                        </button>
                    </div>

                    <div class="w-full text-center p-t-55">
                        <span class="txt2">
                            Already a member?
                        </span>

                        <!-- <a href="{{ route('login') }}" class="txt2 bo1">
                            Sign In now
                        </a> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
   

    <div id="dropDownSelect1"></div>
    

<!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    

    <script>
    function myFunction() {
      var x = document.getElementById("password-confirm");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
    
    
        function myFunctionf() {
      var x = document.getElementById("password");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
    </script>
@endsection
