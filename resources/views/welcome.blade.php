<!DOCTYPE HTML>
  <html>
    <head>
    <style>

    body {
	color: rgb(242, 241, 247);
	background: #0a18d4;
	font-family: 'Roboto', sans-serif;
}
.form-control, .form-control:focus, .input-group-addon {
	border-color: #fdfafa;
	border-radius: 0;
}
.signup-form {
	width: 340px;
	margin: 0 auto;
	padding: 20px 0;
}
.signup-form h2 {
	color: #f1f2f5;
	margin: 0 0 15px;
	text-align: center;
}
.signup-form .lead {
	font-size: 14px;
	margin-bottom: 30px;
	text-align: center;
}
.signup-form form {
	border-radius: 1px;
	margin-bottom: 15px;
    background: rgba(255, 255, 255, 0.425);
	border: none;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
    opacity: 0.9;
}
.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form label {
	font-weight: normal;
	font-size: 14px;
}
.signup-form .form-control {
	min-height: 38px;
	box-shadow: none !important;
	border-width: 0 0 1px 0;
}
.signup-form .input-group-addon {
	max-width: 60px;
	text-align: center;
	background:  #fdfdfd;
	border-bottom: 1px solid #08db12;
	padding-left: 5px;
}
.signup-form .btn, .signup-form .btn:active {
	font-size: 20px;
	font-weight: bold;
	background: #250ef3 !important;
	border-radius: 1px;
	border: none;
	min-width: 120px;
}
.signup-form .btn:hover, .signup-form .btn:focus {
	background: #1cc506e8 !important;
}
.signup-form a {
	color: #f9fdf9;
	text-decoration: none;
}
.signup-form a:hover {
	text-decoration: underline;
}
.signup-form .fa {
	font-size: 21px;
	position: relative;
	top: 4px;
}
.signup-form .fa-paper-plane {
    font-size: 17px;
    color: rgb(10, 10, 9);
}
.signup-form .fa-lock {
    font-size: 20px;
    color: rgb(10, 10, 9);

}

.signup-form .fa-check {
	color: rgb(245, 250, 246);
	left: 10px;
	top: 18px;
	font-size: 7px;
	position: absolute;
}

.form-check-label{
    color: rgb(8, 8, 4);
}
html, body {
  margin: 0;
  height: 100%;
  overflow: hidden
}


    </style>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Bright Aqua </title>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=|Roboto+Sans:400,700|Playfair+Display:400,700">

      <link rel="stylesheet" href="{{asset('Landingpage/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('Landingpage/css/animate.css')}}">
      <link rel="stylesheet" href="{{asset('Landingpage/css/owl.carousel.min.css')}}">
      <link rel="stylesheet" href="{{asset('Landingpage/css/aos.css')}}">
      <link rel="stylesheet" href="{{asset('Landingpage/css/bootstrap-datepicker.css')}}">
      <link rel="stylesheet" href="{{asset('Landingpage/css/jquery.timepicker.css')}}">
      <link rel="stylesheet" href="{{asset('Landingpage/css/fancybox.min.css')}}">

      <link rel="stylesheet" href="{{asset('Landingpage/fonts/ionicons/css/ionicons.min.css')}}">
      <link rel="stylesheet" href="{{asset('Landingpage/fonts/fontawesome/css/font-awesome.min.css')}}">

      <!-- Theme Style -->
      <link rel="stylesheet" href="{{asset('Landingpage/css/style.css')}}">
    </head>
    <body >


    <nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light" id="templateux-navbar">
      <div class="container">
      </div>
    </nav>
    <!-- END nav -->

      <!--BACKGROUND IMAGE-->
      <section class="site-hero overlay" style="background-image: url(Landingpage/images/sand.jpg)" data-stellar-background-ratio="0.5" id="section-home">
        <div class="container">
          <div class="row site-hero-inner justify-content-center align-items-center">
            <div class="col-md-10 text-center" data-aos="fade-up">
    
              <div class="col-md-9 col-lg-4 col-sm-2 pull-right">
                <div class="container">
                  <!--Login form starts-->
                  <div class="pull-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;
                  <a class=" btn btn-success btn-sm" href="{{ url('/my_register') }}">Register</a>
                  </div>
                  <div class="signup-form">
                      <form action="{{ route('login') }}" method="POST">
                          @csrf
                          <h2>Login</h2>
                          <div class="form-group">
                              <div class="input-group">
                                  <span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
                                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="E-mail Address" required autocomplete="email">
                                  @error('email')
                                      <span class="invalid-feedback" role="alert" style="color:rgb(228, 250, 31)">
                                           <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="input-group">
                                  <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
                                  @error('password')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="input-group">
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                      <label class="form-check-label" for="remember">
                                          {{ __('Remember Me') }}
                                      </label>
                                  </div>
                              </div>
                          </div>
                          <div class="form-group">

                              <!-- <button id="login_btn" type="submit" class="btn btn-primary btn-block btn-lg ">{{ __('Login') }}</button> -->
                              <button id="login_btn" type="submit" class="btn btn-dark btn-block btn-lg ">{{ __('Login') }}</button>

                          </div>
                          @if (Route::has('password.request'))
                          <div class="text-center">
                          <a class="text-dark" href="{{ route('password.request') }}">
                              {{ __('Forgot Your Password?') }}
                          </a>
                      </div>
                      <div class="text-center">
                      <a class="text-dark" href="{{url('/my_register') }}">
                          {{ __('Create an account?Sign up') }}
                      </a>
                  </div>
                      @endif
                      </form>
                  </div>
              </div>

                  <!--Login form ends-->


                </div>
              </div>
            </div>
          </div>





      </section>
      

      <script src="{{asset('Landingpage/js/jquery-3.3.1.min.js')}}"></script>
      <script src="{{asset('Landingpage/js/jquery-migrate-3.0.1.min.js')}}"></script>
      <script src="{{asset('Landingpage/js/popper.min.js')}}"></script>
      <script src="{{asset('Landingpage/js/bootstrap.min.js')}}"></script>
      <script src="{{asset('Landingpage/js/owl.carousel.min.js')}}"></script>
      <script src="{{asset('Landingpage/js/jquery.stellar.min.js')}}"></script>
      <script src="{{asset('Landingpage/js/jquery.fancybox.min.js')}}"></script>
      <script src="{{asset('Landingpage/js/jquery.easing.1.3.js')}}"></script>



      <script src="{{asset('Landingpage/js/aos.js')}}"></script>

      <script src="{{asset('Landingpage/js/bootstrap-datepicker.js')}}"></script>
      <script src="{{asset('Landingpage/js/jquery.timepicker.min.js')}}"></script>

      <script src="{{asset('Landingpage/js/main.js')}}"></script>
    </body>
  </html>
