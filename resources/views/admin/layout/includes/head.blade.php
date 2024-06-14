<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- ===============================================-->
<!--    Document Title-->
<!-- ===============================================-->

<!-- ===============================================-->
<!--    Favicons-->
<!-- ===============================================-->
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('admin/assets/img/favicons/apple-touch-icon.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('admin/assets/img/elektrod_logo.svg') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/assets/img/elektrod_logo.svg') }}">
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/assets/img/elektrod_logo.svg') }}">
<link rel="manifest" href="{{ asset('admin/assets/img/favicons/manifest.json') }}">
<meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png')}}">
<meta name="theme-color" content="#ffffff">
<script src="{{ asset('admin/assets/vendors/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/config.js') }}"></script>

<!-- ===============================================-->
<!--    Stylesheets-->
<!-- ===============================================-->
<link rel="preconnect" href="{{ asset('admin/https://fonts.googleapis.com') }}">
<link rel="preconnect" href="{{ asset('admin/https://fonts.gstatic.com') }}" crossorigin="">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
    rel="stylesheet">
<link href="{{ asset('admin/assets/css/theme.min.css') }}" type="text/css" rel="stylesheet" id="style-default">
<link href="{{ asset('admin/assets/css/user.min.css') }}" type="text/css" rel="stylesheet" id="user-style-default">
<link href="{{ asset('admin/assets/css/custom.css') }}" type="text/css" rel="stylesheet" id="user-style-default">
<script>
document.addEventListener('DOMContentLoaded', function() {
    var phoenixIsRTL = window.config.config.phoenixIsRTL;

    if (phoenixIsRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');


        if (linkDefault) {
            linkDefault.setAttribute('disabled', true);
        } else {
            console.error('Element with ID style-default not found');
        }

        if (userLinkDefault) {
            userLinkDefault.setAttribute('disabled', true);
        } else {
            console.error('Element with ID user-style-default not found');
        }
    }
});
</script>

{{-- <link href="{{asset('admin/assets/vendors/leaflet/leaflet.css')}}" rel="stylesheet">
<link href="{{asset('admin/assets/vendors/leaflet.markercluster/MarkerCluster.css')}}" rel="stylesheet">
<link href="{{asset('admin/assets/vendors/leaflet.markercluster/MarkerCluster.Default.css')}}" rel="stylesheet"> --}}