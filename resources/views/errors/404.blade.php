<!DOCTYPE html>
<html data-navigation-type="default" data-navbar-horizontal-shape="default" lang="en-US" dir="ltr">

<head>
    @include('admin.layout.includes.head')
    <title>404</title>
</head>

<body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="px-3">
            <div class="row min-vh-100 flex-center p-5">
                <div class="col-12 col-xl-10 col-xxl-8">
                    <div class="row justify-content-center align-items-center g-5">
                        <div class="col-12 col-lg-6 text-center order-lg-1"><img class="img-fluid w-lg-100 d-dark-none"
                                src="{{asset('admin/assets/img/spot-illustrations/404-illustration.png')}}" alt=""
                                width="400"><img class="img-fluid w-md-50 w-lg-100 d-light-none"
                                src="{{asset('admin/assets/img/spot-illustrations/dark_404-illustration.png')}}" alt=""
                                width="540">
                        </div>
                        <div class="col-12 col-lg-6 text-center text-lg-start"><img
                                class="img-fluid mb-6 w-50 w-lg-75 d-dark-none"
                                src="{{asset('admin/assets/img/spot-illustrations/404.png')}}" alt=""><img
                                class="img-fluid mb-6 w-50 w-lg-75 d-light-none"
                                src="{{asset('admin/assets/img/spot-illustrations/dark_404.png')}}" alt="">
                            <h2 class="text-body-secondary fw-bolder mb-3">Səhifə tapılmadı!</h2>
                            <p class="text-body mb-5">Amma narahat olmayın! Siz təhlükəsiz şəkildə gözlədiyiniz vaxt
                                ərzində <br class="d-none d-sm-block">dəvəquşumuz hər yerdə axtarır. </p><a
                                class="btn btn-lg btn-primary" href="{{route('admin.dashboard')}}">İstəyirsizsə eve
                                qayıdın</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->
    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    @include('admin.layout.includes.foot')
</body>

</html>