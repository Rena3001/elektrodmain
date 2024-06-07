@extends('admin.auth.layouts.master')

@section('content')
    @if (session()->has('login'))
        <p class="login-box-msg text-danger">{{ session('login') }}</p>
    @endif

    <div class="container">
        <div class="row flex-center min-vh-100 py-5">
            <div class="col-sm-10 col-md-8 col-lg-5 col-xl-5 col-xxl-3"><a
                    class="d-flex flex-center text-decoration-none mb-4" href="../../../index-1.html">
                    <div class="d-flex align-items-center fw-bolder fs-3 d-inline-block"><img
                            src="../../../assets/img/icons/logo.png" alt="phoenix" width="58"></div>
                </a>
                <div class="text-center mb-7">
                    <h3 class="text-body-highlight">Sign In</h3>
                    <p class="text-body-tertiary">Get access to your account</p>
                </div>
                <div class="position-relative">
                    <hr class="bg-body-secondary mt-5 mb-4">
                    <div class="divider-content-center"> use email</div>
                </div>
                <form action="{{ route('login_login') }}" method="post">
                    @csrf
                    <div class="mb-3 text-start"><label class="form-label" for="email">Email address</label>
                        <div class="form-icon-container" @error('email') is-invalid @enderror><input
                                class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                                id="email" type="email" placeholder="{{ __('Email Address') }}" required
                                autocomplete="email" autofocus><span class="fas fa-user text-body fs-9 form-icon"></span>
                        </div>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3 text-start"><label class="form-label" for="password">Password</label>
                        <div class="form-icon-container  @error('password') is-invalid @enderror"><input
                                class="form-control form-icon-input" id="password" type="password" name="password"
                                placeholder="{{ __('Password') }}" required autocomplete="current-password"><span
                                class="fas fa-key text-body fs-9 form-icon"></span></div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="row flex-between-center mb-7">
                        <div class="col-auto">
                            <div class="form-check mb-0"><input class="form-check-input" id="basic-checkbox" type="checkbox"
                                    name="remember" {{ old('remember') ? 'checked' : '' }} checked="checked"><label
                                    class="form-check-label mb-0" for="basic-checkbox">{{ __('Remember Me') }}</label></div>
                        </div>

                    </div><button class="btn btn-primary w-100 mb-3">{{ __('Login') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection
