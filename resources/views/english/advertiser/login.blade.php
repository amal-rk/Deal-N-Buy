<!DOCTYPE html>
<html lang="fr">

<!-- Mirrored from colorlib.com/etc/regform/colorlib-regform-5/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Dec 2021 05:05:38 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Colorlib Templates">
<meta name="author" content="Colorlib">
<meta name="keywords" content="Colorlib Templates">

<title>
    Login Professional Account | Deal'N'Buy
</title>

<link href="{{ asset('register-assets/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">
<link href="{{ asset('register-assets/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">

<style id="" media="all">@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 300;
  font-stretch: normal;
  src: url({{ asset('register-assets/font/1.ttf') }}) format('truetype');
}
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 400;
  font-stretch: normal;
  src: url({{ asset('register-assets/font/2.ttf') }}) format('truetype');
}
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 600;
  font-stretch: normal;
  src: url({{ asset('register-assets/font/3.ttf') }}) format('truetype');
}
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 700;
  font-stretch: normal;
  src: url({{ asset('register-assets/font/4.ttf') }}) format('truetype');
}
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 800;
  font-stretch: normal;
  src: url({{ asset('register-assets/font/5.ttf') }}) format('truetype');
}
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  font-stretch: normal;
  src: url({{ asset('register-assets/font/6.ttf') }}) format('truetype');
}
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  font-stretch: normal;
  src: url({{ asset('register-assets/font/7.ttf') }}) format('truetype');
}
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  font-stretch: normal;
  src: url({{ asset('register-assets/font/8.ttf') }}) format('truetype');
}
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  font-stretch: normal;
  src: url({{ asset('register-assets/font/9.ttf') }}) format('truetype');
}
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 800;
  font-stretch: normal;
  src: url({{ asset('register-assets/font/10.ttf') }}) format('truetype');
}
</style>

<link href="{{ asset('register-assets/assetvendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
<link href="{{ asset('register-assets/vendor/datepicker/daterangepicker.css') }}" rel="stylesheet" media="all">

<link href="{{ asset('register-assets/css/main.css') }}" rel="stylesheet" media="all">
<meta name="robots" content="noindex, follow">
</head>
<body>
  <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
    <div class="wrapper wrapper--w790">
      <div class="card card-5">
        <div class="card-heading">
          <h2 class="title">
            Log in <br>
            Professional Account
          </h2>
        </div>
        <div class="card-body">
          <form method="POST" action="{{url('/en/register-user')}}">
            {{ csrf_field() }}
            <div class="form-row">
              <div class="name">
                Username
              </div>
              <div class="value">
                <div class="input-group">
                  <input class="input--style-5" type="text" name="username" required>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="name">
                Password
              </div>
              <div class="value">
                <div class="input-group">
                  <input class="input--style-5" type="password" name="password" required>
                </div>
              </div>
            </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div>
              <button class="btn btn--radius-2 btn--red" type="submit">
                Login
                </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

<script src="{{asset('register-assets/vendor/jquery/jquery.min.js')}}"></script>

<script src="{{asset('register-assets/vendor/select2/select2.min.js')}}"></script>
<script src="{{asset('register-assets/vendor/datepicker/moment.min.js')}}"></script>
<script src="{{asset('register-assets/vendor/datepicker/daterangepicker.js')}}"></script>

<script src="js/global.js"></script>

<!-- Mirrored from colorlib.com/etc/regform/colorlib-regform-5/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Dec 2021 05:05:45 GMT -->
</html>
