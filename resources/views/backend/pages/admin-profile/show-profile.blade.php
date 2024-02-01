@extends('backend.layouts.admin-master')
@section('title', 'your account')
@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Profile</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $admin->name }} </li>
                    </ol>
                </nav>
            </div>
            {{-- <div class="ms-auto">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary">Settings</button>
                    <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
                        data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a class="dropdown-item"
                            href="javascript:;">Action</a>
                        <a class="dropdown-item" href="javascript:;">Another action</a>
                        <a class="dropdown-item" href="javascript:;">Something else here</a>
                        <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated link</a>
                    </div>
                </div>
            </div> --}}
        </div>
        <!--end breadcrumb-->
        <div class="container">
            <div class="main-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    @if ($admin->image)
                                        <img src="{{ asset($admin->image) }}" alt="Admin"
                                            class="rounded-circle p-1 bg-primary" width="110">
                                    @else
                                        <img src="{{ asset('upload/no-image-found.gif') }}" alt="Admin"
                                            class="rounded-circle p-1 bg-primary" width="110">
                                    @endif
                                    <div class="mt-3">
                                        <h4>{{ $admin->name }}</h4>
                                        <p class="text-secondary mb-1">{{ $admin->email }}</p>
                                        <p class="text-muted font-size-sm">{{ $admin->username }}</p>
                                        <button class="btn btn-outline-primary"><a
                                                href="tel::{{ $admin->phone }}">{{ $admin->phone }}</a></button>
                                    </div>
                                </div>
                                <hr class="my-4" />
                                <ul class="list-group list-group-flush">

                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0">
                                            <a href="{{ $admin->facebook }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-facebook me-2 icon-inline text-primary">
                                                    <path
                                                        d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                                    </path>
                                                </svg>
                                            </a>
                                            Facebook
                                        </h6>
                                        <span class="text-secondary">{{ Str::limit($admin->facebook, 15, '...') }}</span>
                                    </li>

                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0">
                                            <a href="{{ $admin->twitter }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-twitter me-2 icon-inline text-info">
                                                    <path
                                                        d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                                                    </path>
                                                </svg>
                                            </a>
                                            Twitter
                                        </h6>
                                        <span class="text-secondary">{{ Str::limit($admin->twitter, 15, '...') }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0">
                                            <a href="{{ $admin->instagram }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-instagram me-2 icon-inline text-danger">
                                                    <rect x="2" y="2" width="20" height="20" rx="5"
                                                        ry="5"></rect>
                                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z">
                                                    </path>
                                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5">
                                                    </line>
                                                </svg>
                                            </a>
                                            Instagram
                                        </h6>
                                        <span class="text-secondary">{{ Str::limit($admin->instagram, 15, '...') }}
                                        </span>
                                    </li>

                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0">

                                            C Time
                                        </h6>
                                        <span class="text-secondary">
                                            {{ $admin->created_at->format('d-M-Y') }} <span
                                                class=" text-primary">({{ $admin->created_at->diffForHumans() }})</span>
                                        </span>
                                    </li>

                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0">

                                            U Time
                                        </h6>
                                        @if ($admin->updated_at)
                                            <span class="text-secondary">
                                                {{ $admin->updated_at->format('d-M-Y') }} <span
                                                    class=" text-primary">({{ $admin->updated_at->diffForHumans() }})</span>
                                            </span>
                                        @endif
                                    </li>



                                </ul>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="d-flex align-items-center mb-3">Change Password</h5>

                                        <form action="{{ route('update.password') }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="id" value="{{ $admin->id }}">


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
                        </div>
                    </div>


                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="d-flex align-items-center mb-3">Edit Profile</h5>

                                <form action="{{ route('update.profile') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="id" value="{{ $admin->id }}">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <!--form group-->
                                            <div class="my-2">
                                                <label for="name" class=" form-label">Name</label>
                                                <input type="text"
                                                    class="form-control @error('name')is-invalid @enderror" id="name"
                                                    name="name" value="{{ $admin->name }}">
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
                                                    id="email" name="email" value="{{ $admin->email }}">
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
                                                    id="phone" name="phone" value="{{ $admin->phone }}">
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
                                                    id="username" name="username" value="{{ $admin->username }}">
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
                                        <input type="text" class="form-control" id="facebook" name="facebook"
                                            value="{{ $admin->facebook }}">
                                    </div>

                                    <!--form group-->
                                    <div class="my-2">
                                        <label for="twitter" class=" form-label">Twitter</label>
                                        <input type="text" class="form-control" id="twitter" name="twitter"
                                            value="{{ $admin->twitter }}">
                                    </div>

                                    <!--form group-->
                                    <div class="my-2">
                                        <label for="instagram" class=" form-label">Instagram</label>
                                        <input type="text" class="form-control" id="instagram" name="instagram"
                                            value="{{ $admin->instagram }}">
                                    </div>
                                    <!--form group-->
                                    <div class="my-2">
                                        <label for="image" class=" form-label">Profile Image</label>
                                        <input type="file" class="form-control dropify" id="image" name="image"
                                            data-default-file="{{ asset($admin->image) }}">
                                    </div>

                                    <div class="my-2">
                                        <button class="btn btn-success px-5"><i class="bx bx-home mr-1"></i> Update Data
                                            Save</button>
                                    </div>
                                </form>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
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
