@extends('layouts.main')

@section('head')
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
@stop

@section('content')
<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">

        <h1>Opps...</h1>
        <br>
        <br>
        <p>The transaction failed, please confirm that your operation is logical before proceeding!</p>

        <a href="{{ url('dashboard-dark') }}">
            <button class="btn btn-primary" >Dashboard</button>
        </a>

    </div>
</div>
<!--**********************************
    Content body end
***********************************-->
@stop

@section('footer')
<div class="footer out-footer">
    <div class="copyright">
        <p>Copyright © Developed by <a href="https://dexignzone.com/" target="_blank">DexignZone</a> 2022</p>
    </div>
</div>
@stop

@section('script')
<!-- Required vendors -->
<script src="./vendor/global/global.min.js"></script>
<script src="./vendor/chart.js/Chart.bundle.min.js"></script>
<script src="./vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

<!-- Apex Chart -->
<script src="./vendor/apexchart/apexchart.js"></script>
<script src="./vendor/swiper/js/swiper-bundle.min.js"></script>
<!--<script src="https://s3.tradingview.com/tv.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/wnumb/1.2.0/wNumb.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.js"></script>
<script src="./vendor/raphael/raphael.min.js"></script>
<script src="./vendor/morris/morris.min.js"></script>

<!-- Dashboard 1 -->
<script src="./js/dashboard/dashboard-1.js"></script>
<script src="./js/custom.js"></script>
<script src="./js/deznav-init.js"></script>
<script src="./js/dashboard/tradingview-2.js"></script>

<script>
    jQuery(document).ready(function(){
        setTimeout(function(){
            dzSettingsOptions.version = 'dark';
            new dzSettings(dzSettingsOptions);
        },1500)
    });
</script>
@stop
