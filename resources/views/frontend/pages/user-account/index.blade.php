@extends('frontend.layouts.frontend-master')
@section('main')
    <div class="main_wrapper" data-bs-spy="scroll" data-bs-target="#main_menu_area" data-bs-root-margin="0px 0px -40%"
        data-bs-smooth-scroll="true" tabindex="0">


        <header class="site-header parallax-bg" style="background-position: 50% 0px;">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-sm-7">
                        <h2 class="title">Welcome </h2>
                    </div>
                    <div class="col-sm-5">
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li>{{ $user->name }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>



        <!-- Quote-Area-Start -->
        <div class="container my-5">
            <div class="row g-3">
                <div class="col-lg-4">
                    <div class="p-3 shadow-lg text-center">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <div class=" text-center">
                                @if ($user->image)
                                    <img src="{{ asset($user->image) }}" class=" img-fluid mx-auto"
                                        style="height: 150px;width:150px;border-radius:50%;margin:10px auto;"
                                        alt="">
                                @else
                                    <img src="{{ asset('upload/no-image-found.gif') }}" class=" img-fluid mx-auto"
                                        style="height: 150px;width:150px;border-radius:50%;margin:10px auto;"
                                        alt="">
                                @endif

                            </div>
                            <div class="border bg-light p-2 my-3 shadow-sm">
                                <h6> <i class="far fa-dot-circle fa-fade fa-sm text-success "></i> {{ $user->name }}</h6>
                                <p>{{ $user->email }}</p>
                                <p>{{ $user->username }}</p>

                            </div>
                            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#profile" type="button" role="tab" aria-controls="v-pills-home"
                                aria-selected="true">Profile</button>

                            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-profile" type="button" role="tab"
                                aria-controls="v-pills-profile" aria-selected="false">Password</button>

                            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#delete_account" type="button" role="tab"
                                aria-controls="v-pills-profile" aria-selected="false">Delete Account</button>


                            <form method="POST" action="{{ route('logout') }}" class="d-inline w-100 text-center"
                                style="display: inline-block">
                                @csrf
                                <a class=" btn btn-outline-danger my-2" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                            this.closest('form').submit();">Logout</a>


                            </form>

                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="p-4 shadow">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="profile" role="tabpanel"
                                aria-labelledby="v-pills-home-tab" tabindex="0">

                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="d-flex align-items-center mb-3">Edit Profile</h5>

                                        <form action="{{ route('change.profile') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="id" value="{{ $user->id }}">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <!--form group-->
                                                    <div class="my-2">
                                                        <label for="name" class=" form-label">Name</label>
                                                        <input type="text"
                                                            class="form-control @error('name')is-invalid @enderror"
                                                            id="name" name="name" value="{{ $user->name }}">
                                                        @error('name')
                                                            <span class=" text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <!--form group-->
                                                    <div class="my-2">
                                                        <label for="email" class=" form-label">E-mail</label>
                                                        <input type="email"
                                                            class="form-control @error('email')is-invalid @enderror"
                                                            id="email" name="email" value="{{ $user->email }}">
                                                        @error('email')
                                                            <span class=" text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">

                                                    <!--form group-->
                                                    <div class="my-2">
                                                        <label for="phone" class=" form-label">Phone</label>
                                                        <input type="text"
                                                            class="form-control @error('phone')is-invalid @enderror"
                                                            id="phone" name="phone" value="{{ $user->phone }}">
                                                        @error('phone')
                                                            <span class=" text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <!--form group-->
                                                    <div class="my-2">
                                                        <label for="username" class=" form-label">UserName</label>
                                                        <input type="text"
                                                            class="form-control @error('username') is-invalid @enderror"
                                                            id="username" name="username"
                                                            value="{{ $user->username }}">
                                                        @error('username')
                                                            <span class=" text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <h4 class="my-2 text-center font-bold">All Social Media</h4>
                                            <!--form group-->
                                            <div class="my-2">
                                                <label for="facebook" class=" form-label">Facebook</label>
                                                <input type="text" class="form-control" id="facebook"
                                                    name="facebook" value="{{ $user->facebook }}">
                                            </div>

                                            <!--form group-->
                                            <div class="my-2">
                                                <label for="twitter" class=" form-label">Twitter</label>
                                                <input type="text" class="form-control" id="twitter" name="twitter"
                                                    value="{{ $user->twitter }}">
                                            </div>

                                            <!--form group-->
                                            <div class="my-2">
                                                <label for="instagram" class=" form-label">Instagram</label>
                                                <input type="text" class="form-control" id="instagram"
                                                    name="instagram" value="{{ $user->instagram }}">
                                            </div>
                                            <!--form group-->
                                            <div class="my-2">
                                                <label for="image" class=" form-label">Profile Image</label>
                                                <input type="file" class="form-control dropify" id="image"
                                                    name="image" data-default-file="{{ asset($user->image) }}">
                                            </div>

                                            <div class="my-2">
                                                <button class="btn btn-success px-5"><i class="bx bx-home mr-1"></i>
                                                    Update Data Save</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab" tabindex="0">


                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="d-flex align-items-center mb-3">Change Password</h5>

                                        <form action="{{ route('change.password') }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="id" value="{{ $user->id }}">


                                            <!--form group-->
                                            <div class="my-2">
                                                <label for="password" class=" form-label">Current Password</label>
                                                <input type="password"
                                                    class="form-control @error('password')
                                                is-invalid
                                              @enderror"
                                                    id="password" name="password" value="">
                                                @error('password')
                                                    <span class=" text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!--form group-->
                                            <div class="my-2">
                                                <label for="new_password" class=" form-label">New Password</label>
                                                <input type="password"
                                                    class="form-control @error('new_password')
                                                is-invalid
                                              @enderror"
                                                    id="new_password" name="new_password" value="">
                                                @error('new_password')
                                                    <span class=" text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!--form group-->
                                            <div class="my-2">
                                                <label for="confirm_password" class=" form-label">Confirm Password</label>
                                                <input type="password"
                                                    class="form-control @error('confirm_password')
                                              is-invalid
                                            @enderror"
                                                    id="confirm_password" name="confirm_password" value="">
                                                @error('confirm_password')
                                                    <span class=" text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>



                                            <div class="my-2">
                                                <button type="submit" class="btn btn-danger px-5"><i
                                                        class="bx bx-bookmark mr-1"></i>Update Password</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="delete_account" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab" tabindex="0">


                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="d-flex align-items-center mb-3">Account Permanent Delete?</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut ex reprehenderit
                                            praesentium perferendis labore, sunt voluptas mollitia modi porro dolor culpa
                                            tempora? Cum, facilis facere.</p>

                                        <form action="{{ route('delete.account') }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <input type="hidden" name="id" value="{{ $user->id }}">

                                            <!--form group-->
                                            <div class="my-2">
                                                <label for="password" class=" form-label">Current Password</label>
                                                <input type="password"
                                                    class="form-control @error('password')
                                                is-invalid
                                              @enderror"
                                                    id="password" name="password" value="">
                                                @error('password')
                                                    <span class=" text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="my-2">
                                                <button type="submit" class="my-2 btn btn-danger px-5"><i
                                                        class="bx bx-bookmark mr-1"></i>Deleted</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Quote-Area-End -->

        <!-- Footer-Area-Start -->
        @include('frontend.layouts.includes.footer')
        <!-- Footer-Area-End -->
    </div>
@endsection
@push('scripts')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"
        integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"
        integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.dropify').dropify({
            showErrors: true,
            errorTimeout: 3000,
            errorsPosition: 'overlay',
            imgFileExtensions: ['png', 'jpg', 'jpeg', 'gif', 'bmp'],
            imgFileExtensions: ['png', 'jpg', 'jpeg', 'gif', 'bmp', 'webp'],
            maxFileSizePreview: "5M",
            allowedFormats: ['portrait', 'square', 'landscape'],
            allowedFileExtensions: ['*'],
            messages: {
                'default': 'Drag,drop or click',
                'replace': 'Drag,drop,click to replace',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happended.',

            }
        });
    </script>
@endpush
