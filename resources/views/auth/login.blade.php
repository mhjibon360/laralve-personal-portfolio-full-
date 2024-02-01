@extends('frontend.layouts.frontend-master')
@section('main')
    <div class="main_wrapper" data-bs-spy="scroll" data-bs-target="#main_menu_area" data-bs-root-margin="0px 0px -40%"
        data-bs-smooth-scroll="true" tabindex="0">


        <header class="site-header parallax-bg" style="background-position: 50% 0px;">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-sm-7">
                        <h2 class="title">Login</h2>
                    </div>
                    <div class="col-sm-5">
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="{{ route('register') }}">Register</a></li>
                                <li>login</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>



        <!-- Quote-Area-Start -->
        <div class="container-fluid my-5">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                <div class="col mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="border p-4 rounded">
                                <div class="text-center">
                                    <h3 class="">Sign in</h3>
                                    <p>Don't have an account yet? <a href="{{ route('register') }}">Sign up here</a>
                                    </p>
                                </div>

                                <div class="login-separater text-center mb-4"> <span>OR SIGN IN WITH EMAIL</span>
                                    <hr>
                                </div>
                                <div class="form-body">
                                    <form class="row g-3" action="{{ route('login') }}" method="POST">
                                        @method('post')
                                        @csrf
                                        <div class="col-12">
                                            <label for="inputEmailAddress" class="form-label">Email Address</label>
                                            <input type="email"
                                                class="form-control @error('email')
                                          is-invalid
                                        @enderror"
                                                id="inputEmailAddress" name="email" placeholder="Email Address"
                                                value="{{ old('email') }}">
                                            @error('emali')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="inputChoosePassword" class="form-label">Enter
                                                Password</label>
                                            <div class="input-group" id="show_hide_password">
                                                <input type="password"
                                                    class="form-control border-end-0 @error('password')
                                            is-invalid
                                          @enderror"
                                                    id="inputChoosePassword" value="" name="password"
                                                    placeholder="Enter Password">
                                                <a href="javascript:;" class="input-group-text bg-transparent"><i
                                                        class='bx bx-hide'></i></a>
                                            </div>
                                            @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="remember" type="checkbox"
                                                    id="flexSwitchCheckChecked" checked>
                                                <label class="form-check-label" for="flexSwitchCheckChecked">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-end"> <a href="{{ route('password.request') }}">Forgot
                                                Password ?</a>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary"><i
                                                        class="bx bxs-lock-open"></i>Sign in</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
        <!-- Quote-Area-End -->

        <!-- Footer-Area-Start -->
        @include('frontend.layouts.includes.footer')
        <!-- Footer-Area-End -->
    </div>
@endsection
