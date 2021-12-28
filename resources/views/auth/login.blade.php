@extends('layouts.master2')

@section('title')
    برنامج الفواتير - تسجيل الدخول
@endsection





@section('content')
    <div class="container-fluid overflow-hidden">
        <div class="row no-gutter">
            <!-- The image half -->
            <!-- The content half -->
            <div class="col-md-6 col-lg-6 col-xl-5 text-white" style="background-color: rgb(8,123,250)">
                <div class="login d-flex align-items-center py-2">
                    <!-- Demo content-->
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
                                <div class="card-sigin">
                                    <div class="mb-5 d-flex"> <a href="{{ route('home')  }}"><img src="{{ asset('assets/img/invoice.png') }}" class="sign-favicon ht-40" alt="logo"></a>
                                        <h1 class="main-logo1 ml-1 mr-3 my-auto tx-28"> برنامج الفواتير </h1>
                                    </div>
                                    <div class="card-sigin">
                                        <div class="main-signup-header">
                                            <h2 class="text-white"> مرحبا بك </h2>
                                            <form class="my-5" method="POST" action="{{ route('login') }}">
                                                @csrf
                                                <div class="form-group">
                                                    <label class="text-white" for="email">البريد الالكتروني</label>
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                     </span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label class="text-white" for="password">كلمة المرور</label>

                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                                  </span>
                                                    @enderror
                                                    <div class="form-group row">
                                                        <div class="col-md-6 offset-md-4">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <label class="form-check-label text-white" for="remember">
                                                                    {{ __('تذكرني') }}
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-main-primary btn-block rounded-pill my-4">
                                                    {{ __('تسجيل الدخول') }}
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End -->
                </div>
            </div><!-- End -->

            <div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-white p-0">
                <div class="row wd-100p mx-auto text-center">
                    <img src="{{ asset('assets/img/login-image.jpg') }}" class="my-auto ht-xl-80p wd-md-100p wd-xl-80p mx-auto" alt="logo">

                </div>
            </div>

        </div>
    </div>
@endsection


