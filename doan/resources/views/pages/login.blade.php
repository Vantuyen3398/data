<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Flat lay login form Responsive Widget Template : W3layouts</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
    content="Flat lay login form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!-- //Meta tag Keywords -->

    <link href="//fonts.googleapis.com/css2?family=Nunito:wght@300;400;600&display=swap" rel="stylesheet">

    <!--/Style-CSS -->
    <link rel="stylesheet" href="./resources/css/style.css" type="text/css" media="all" />
    <!--//Style-CSS -->

    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>

</head>

<body>
    <!-- form section start -->
    <section class="w3l-workinghny-form">
        <!-- /form -->
        <div class="workinghny-form-grid">
            <div class="wrapper">
                <div class="logo">
                    <h1><a class="brand-logo" href="index.html">Flat lay login form</a></h1>
                    <h1><?php
                    if(Session::get('message')) {
                      echo Session::get('message');
                      Session::put('message','');
                  }
                  ?></h1>
              </div>
              <div class="workinghny-block-grid">
                <div class="form-right-inf">
                    <h2>Đăng nhập </h2>
                    <div class="social-media">
                        <a href="#facebook" class="fb"><span class="fab fa-facebook" aria-hidden="true"></span> Login with facebok</a>
                        <a href="#twitter" class="tw"><span class="fab fa-google" aria-hidden="true"></span> Login with google</a>
                    </div>
                    <div class="login-form-content">
                        <h2>Đăng nhập với email</h2>
                        <form action="{{URL::to('loginUser')}}" class="signin-form" method="post">
                             {!!csrf_field()!!}
                            <div class="one-frm">
                                <input type="email" name="email" placeholder="Email" required="" autofocus>
                            </div>
                            <div class="one-frm">
                                <input type="password" name="password" placeholder="Password" required="">
                            </div>
                            <label class="check-remaind">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                                <p class="remember">Ghi nhớ</p>

                            </label>
                            <button type="submit" class="btn btn-style mt-3">Đăng nhập</button>
                            <p class="already">Chưa có tài khoản? <a href="{{URL::to('signin')}}">Đăng kí</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //form -->
    <!-- copyright-->
    <div class="copyright text-center">
        <div class="wrapper">
            <p class="copy-footer-29">© 2020 Flat lay login form. All rights reserved | Design by <a
                href="https://w3layouts.com">W3layouts</a></p>
            </div>
        </div>
        <!-- //copyright-->
    </section>
    <!-- //form section start -->
</body>

</html>