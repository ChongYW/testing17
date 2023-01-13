<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="CryptoZone : Crypto Trading Admin Bootstrap 5 Template">
    <meta property="og:title" content="CryptoZone  :Crypto Trading Admin Bootstrap 5 Template">
    <meta property="og:description" content="CryptoZone  :Crypto Trading Admin  Admin Bootstrap 5 Template">
    <meta property="og:image" content="https://cryptozone.dexignzone.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>CryptoZone Crypto Trading Admin</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link href="./vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">

</head>

<body class="vh-100">
<div class="page-wraper">

    <!-- Content -->
    <div class="browse-job login-style3">
        <!-- Coming Soon -->
        <div class="bg-img-fix overflow-hidden" style="background:#fff url(images/background/bg6.jpg); height: 100vh;">
            <div class="row gx-0">
                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12 vh-100 bg-white ">
                    <div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: 653px;" tabindex="0">
                        <div id="mCSB_1_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
                            <div class="login-form style-2">


                                <div class="card-body">
                                    <div class="logo-header">
                                        <a href="index.html" class="logo"><img src="images/logo/logo-full.png" alt="" class="width-230 mCS_img_loaded"></a>
                                    </div>

                                    <nav>
                                        <div class="nav nav-tabs border-bottom-0" id="nav-tab" role="tablist">

                                            <div class="tab-content w-100" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="nav-personal" role="tabpanel" aria-labelledby="nav-personal-tab">
<!--                                                    <form class=" dz-form pb-3">-->
                                                    <form method="POST" action="{{ route('login') }}">
                                                        @csrf

                                                        <h3 class="form-title m-t0">Personal Information</h3>
                                                        <div class="dz-separator-outer m-b5">
                                                            <div class="dz-separator bg-primary style-liner"></div>
                                                        </div>
                                                        <p>Enter your e-mail address and your password. </p>
                                                        <div class="form-group mb-3">
<!--                                                            <input name="dzName" required="" class="form-control" placeholder="User Name" type="text">-->
                                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Name">

                                                            @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group mb-3">
<!--                                                            <input name="dzName" required="" class="form-control " placeholder="Type Password" type="password">-->
                                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                                            @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group text-left mb-5">
                                                            <button class="btn btn-primary dz-xs-flex m-r5">login</button>
                                                            <span class="form-check d-inline-block">
															<input type="checkbox" class="form-check-input" id="check1" name="example1">
															<label class="form-check-label" for="check1">Remember me</label>
														</span>
                                                            <button class="nav-link m-auto btn tp-btn-light btn-primary" id="nav-forget-tab" data-bs-toggle="tab" data-bs-target="#nav-forget" type="button" role="tab" aria-controls="nav-forget" aria-selected="false">Forget Password ?</button>
                                                        </div>
                                                        <div class="dz-social ">
                                                            <h5 class="form-title fs-20">Sign In With</h5>
                                                            <ul class="dz-social-icon dz-border dz-social-icon-lg text-white">
                                                                <li><a target="_blank" href="https://www.facebook.com/" class="fab fa-facebook-f btn-facebook"></a></li>
                                                                <li><a target="_blank" href="https://www.google.com/" class="fab fa-google-plus-g btn-google-plus"></a></li>
                                                                <li><a target="_blank" href="https://www.linkedin.com/" class="fab fa-linkedin-in btn-linkedin"></a></li>
                                                                <li><a target="_blank" href="https://twitter.com/" class="fab fa-twitter btn-twitter"></a></li>
                                                            </ul>
                                                        </div>
                                                    </form>
                                                    <div class="text-center bottom">
                                                        <a href="{{ url('page-register') }}">
                                                            <button class="btn btn-primary button-md btn-block" id="nav-sign-tab" data-bs-toggle="tab" data-bs-target="#nav-sign" type="button" role="tab" aria-controls="nav-sign" aria-selected="false">Create an account</button>
                                                        </a>

                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="nav-forget" role="tabpanel" aria-labelledby="nav-forget-tab">
                                                    <form class="dz-form">
                                                        <h3 class="form-title m-t0">Forget Password ?</h3>
                                                        <div class="dz-separator-outer m-b5">
                                                            <div class="dz-separator bg-primary style-liner"></div>
                                                        </div>
                                                        <p>Enter your e-mail address below to reset your password. </p>
                                                        <div class="form-group mb-4">
                                                            <input name="dzName" required="" class="form-control" placeholder="Email Address" type="text">
                                                        </div>
                                                        <div class="form-group clearfix text-left">
                                                            <button class=" active btn btn-primary" id="nav-personal-tab" data-bs-toggle="tab" data-bs-target="#nav-personal" type="button" role="tab" aria-controls="nav-personal" aria-selected="true">Back</button>
                                                            <button class="btn btn-primary float-end">Submit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="tab-pane fade" id="nav-sign" role="tabpanel" aria-labelledby="nav-sign-tab">
                                                    <form class="dz-form py-2">
                                                        <h3 class="form-title">Sign Up</h3>
                                                        <div class="dz-separator-outer m-b5">
                                                            <div class="dz-separator bg-primary style-liner"></div>
                                                        </div>
                                                        <p>Enter your personal details below: </p>
                                                        <div class="form-group mt-3">
                                                            <input name="dzName" required="" class="form-control" placeholder="Full Name" type="text">
                                                        </div>
                                                        <div class="form-group mt-3">
                                                            <input name="dzName" required="" class="form-control" placeholder="User Name" type="text">
                                                        </div>
                                                        <div class="form-group mt-3">
                                                            <input name="dzName" required="" class="form-control" placeholder="Email Address" type="text">
                                                        </div>

                                                        <div class="form-group mt-3">
                                                            <input name="dzName" required="" class="form-control" placeholder="Password" type="password">
                                                        </div>
                                                        <div class="form-group mt-3 mb-3">
                                                            <input name="dzName" required="" class="form-control" placeholder="Re-type Your Password" type="password">
                                                        </div>
                                                        <div class="mb-3">
													<span class="form-check float-start me-2 ">
														<input type="checkbox" class="form-check-input" id="check2" name="example1">
														<label class="form-check-label d-unset" for="check2">I agree to the</label>
													</span>
                                                            <label ><a href="#">Terms of Service </a>&amp; <a href="#">Privacy Policy</a></label>
                                                        </div>
                                                        <div class="form-group clearfix text-left">
                                                            <button class="btn btn-primary outline gray" data-bs-toggle="tab" data-bs-target="#nav-personal" type="button" role="tab" aria-controls="nav-personal" aria-selected="true">Back</button>
                                                            <button class="btn btn-primary float-end">Submit</button>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>

                                        </div>
                                    </nav>
                                </div>
                                <div class="card-footer">
                                    <div class=" bottom-footer clearfix m-t10 m-b20 row text-center">
                                        <div class="col-lg-12 text-center">
												<span> © Copyright by <span class="heart"></span>
												<a href="javascript:void(0);">DexignZone </a> All rights reserved.</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: block;">
                            <div class="mCSB_draggerContainer">
                                <div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 0px; display: block; height: 652px; max-height: 643px; top: 0px;">
                                    <div class="mCSB_dragger_bar" style="line-height: 0px;"></div><div class="mCSB_draggerRail"></div></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Full Blog Page Contant -->
    </div>
    <!-- Content END-->
</div>

<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
<script src="./vendor/global/global.min.js"></script>
<script src="./vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
<script src="js/deznav-init.js"></script>
<script src="./js/custom.js"></script>


</body>
</html>