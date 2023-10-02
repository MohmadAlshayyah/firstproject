<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>eTrade || Sign In</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/asset/images/favicon.png">

    <!-- CSS
    ============================================ -->

    <link rel="stylesheet" href="{{asset('asset/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/vendor/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/vendor/flaticon/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/vendor/slick.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/vendor/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/vendor/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/vendor/sal.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/vendor/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/vendor/base.css')}}">
    <link rel="stylesheet" href="{{asset('../asset/css/style.min.css')}}">

    






    <link rel="shortcut icon" type="image/x-icon" href="{{asset('asset/images/favicon.png')}}">

</head>


<body>
    <div class="axil-signin-area">

        <!-- Start Header -->
        <div class="signin-header">
            <div class="row align-items-center">
                <div class="col-sm-4">
                    <a href="index.html" class="site-logo"><img src="/asset/images/logo/logo.png" alt="logo"></a>
                </div>
                <div class="col-sm-8">
                    <div class="singin-header-btn">
                        <p>Not a member?</p>
                        <a href="{{route('user.singup')}}" class="axil-btn btn-bg-secondary sign-up-btn">Sign Up Now</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header -->

        <div class="row">
            <div class="col-xl-4 col-lg-6">
                <div class="axil-signin-banner bg_image bg_image--9">
                    <h3 class="title">We Offer the Best Products</h3>
                </div>
            </div>
            <div class="col-lg-6 offset-xl-2">
                <div class="axil-signin-form-wrap">
                    <div class="axil-signin-form">
                        <h3 class="title">Sign in to eTrade.</h3>
                        <p class="b2 mb--55">Enter your detail below</p>
                        <form method="POST" action="{{ route('signin') }}">
                        @csrf
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between">
                                <button type="submit" class="axil-btn btn-bg-primary submit-btn">Sign In</button>
                                <a href="{{route('user.forgotpass')}}" class="forgot-btn">Forget password?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <!-- Modernizer JS -->
  <script src="{{asset('asset/js/vendor/modernizr.min.js')}}"></script>
  <!-- jQuery JS -->
  <script src="{{asset('asset/js/vendor/jquery.js')}}"></script>
  <!-- Bootstrap JS -->
  <script src="{{asset('asset/js/vendor/popper.min.js')}}"></script>
  <script src="{{asset('asset/js/vendor/bootstrap.min.js')}}"></script>
  <script src="{{asset('asset/js/vendor/slick.min.js')}}"></script>
  <script src="{{asset('asset/js/vendor/js.cookie.js')}}"></script>
  <!-- <script src="asset/js/vendor/jquery.style.switcher.js"></script> -->
  <script src="{{asset('asset/js/vendor/jquery-ui.min.js')}}"></script>
  <script src="{{asset('asset/js/vendor/jquery.ui.touch-punch.min.js')}}"></script>
  <script src="{{asset('asset/js/vendor/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('asset/js/vendor/sal.js')}}"></script>
  <script src="{{asset('asset/js/vendor/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('asset/js/vendor/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('asset/js/vendor/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('asset/js/vendor/counterup.js')}}"></script>
  <script src="{{asset('asset/js/vendor/waypoints.min.js')}}"></script>

  <!-- Main JS -->
  <script src="{{asset('asset/js/main.js')}}"></script>

  

</body>

</html>