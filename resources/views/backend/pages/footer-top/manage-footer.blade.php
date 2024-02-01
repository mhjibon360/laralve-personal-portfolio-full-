@extends('backend.layouts.admin-master')
@section('title', 'manage footer top content')
@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">
                <h4>Manage Footer-top</h4>
            </div>

            <div class="ms-auto">
                <div class="btn-group">

                    <span class="badge bg-success">{{ $footerTop->updated_at->format('d-M-Y') }}
                        ({{ $footerTop->updated_at->diffForHumans() }})</span>
                </div>
            </div>
        </div>

        <!--end row-->
        <div class="row">
            <div class="col-xl-12 mx-auto">
                <hr />
                <div class="card border-top border-0 border-4 border-info">
                    <div class="card-body">
                        <div class="border p-4 rounded">
                            <div class="card-title d-flex align-items-center">
                                <div><i class="bx bxs-contact me-1 font-22 text-info"></i>
                                </div>
                                <h5 class="mb-0 text-info">Manage Footer Top Content</h5>
                            </div>
                            <hr />
                            <form action="{{ route('update.footer.top', $footerTop->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card p-3 shadow-sm">
                                            <h5>Foter Top Left</h5>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-8">
                                                            <div class="my-3">
                                                                <label for="logo" class="form-label"> Logo </label>
                                                                <input type="file" class="form-control logo"
                                                                    id="logo" name="logo"
                                                                    value="{{ asset($footerTop->logo) }}">
                                                                @error('logo')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <img id="show_image"
                                                                src="{{ asset($footerTop->logo) }}"
                                                                class="show_image img-fluid" alt="">
                                                        </div>
                                                    </div>


                                                    <div class="my-3">
                                                        <label for="short_details" class="form-label"> Footer short Details
                                                        </label>
                                                        <textarea name="short_details" id="short_details" class=" form-control" rows="8">{{ $footerTop->short_details }}</textarea>
                                                        @error('short_details')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-6">
                                                            <div class="my-3">
                                                                <label for="facebook_icon" class="form-label"> Facebook Icon
                                                                </label>
                                                                <input type="text" class=" form-control"
                                                                    name="facebook_icon" id="facebook_icon"
                                                                    value="{{ $footerTop->facebook_icon }}">
                                                                @error('footerTop')
                                                                    <span class="text-dnger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="my-3">
                                                                <label for="facebook_link" class="form-label"> Facebook Url
                                                                </label>
                                                                <input type="text" class=" form-control"
                                                                    name="facebook_link" id="facebook_link"
                                                                    value="{{ $footerTop->facebook_link }}">
                                                                @error('footerTop')
                                                                    <span class="text-dnger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row align-items-center">
                                                        <div class="col-lg-6">
                                                            <div class="my-3">
                                                                <label for="instagram_icon" class="form-label"> Instagram
                                                                    Icon
                                                                </label>
                                                                <input type="text" class=" form-control"
                                                                    name="instagram_icon" id="instagram_icon"
                                                                    value="{{ $footerTop->instagram_icon }}">
                                                                @error('instagram_icon')
                                                                    <span class="text-dnger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="my-3">
                                                                <label for="instagram_link" class="form-label"> Instagram
                                                                    Url
                                                                </label>
                                                                <input type="text" class=" form-control"
                                                                    name="instagram_link" id="instagram_link"
                                                                    value="{{ $footerTop->instagram_link }}">
                                                                @error('instagram_link')
                                                                    <span class="text-dnger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row align-items-center">
                                                        <div class="col-lg-6">
                                                            <div class="my-3">
                                                                <label for="twitter_icon" class="form-label"> Twitter Icon
                                                                </label>
                                                                <input type="text" class=" form-control"
                                                                    name="twitter_icon" id="twitter_icon"
                                                                    value="{{ $footerTop->twitter_icon }}">
                                                                @error('twitter_icon')
                                                                    <span class="text-dnger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="my-3">
                                                                <label for="twitter_link" class="form-label"> Twitter Url
                                                                </label>
                                                                <input type="text" class=" form-control"
                                                                    name="twitter_link" id="twitter_link"
                                                                    value="{{ $footerTop->twitter_link }}">
                                                                @error('twitter_link')
                                                                    <span class="text-dnger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row align-items-center">
                                                        <div class="col-lg-6">
                                                            <div class="my-3">
                                                                <label for="behance_icon" class="form-label"> Behance Icon
                                                                </label>
                                                                <input type="text" class=" form-control"
                                                                    name="behance_icon" id="behance_icon"
                                                                    value="{{ $footerTop->behance_icon }}">
                                                                @error('behance_icon')
                                                                    <span class="text-dnger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="my-3">
                                                                <label for="behance_link" class="form-label"> Behance Url
                                                                </label>
                                                                <input type="text" class=" form-control"
                                                                    name="behance_link" id="behance_link"
                                                                    value="{{ $footerTop->behance_link }}">
                                                                @error('behance_link')
                                                                    <span class="text-dnger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="card p-3 shadow-sm">
                                            <h5>Foter Top UseFul Link</h5>
                                            <div class="my-3">
                                                <label for="userful_title" class="form-label">UserFul Link Heading Title
                                                </label>
                                                <input type="text" class=" form-control" id="userful_title"
                                                    name="userful_title" value="{{ $footerTop->userful_title }}">
                                                @error('userful_title')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="my-3">
                                                <label for="portfolio_title" class="form-label">Portfolio Title
                                                </label>
                                                <input type="text" class=" form-control" id="portfolio_title"
                                                    name="portfolio_title" value="{{ $footerTop->portfolio_title }}">
                                                @error('portfolio_title')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="my-3">
                                                <label for="blog_title" class="form-label">Blog Title
                                                </label>
                                                <input type="text" class=" form-control" id="blog_title"
                                                    name="blog_title" value="{{ $footerTop->blog_title }}">
                                                @error('blog_title')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>




                                        </div>

                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card p-3 shadow-sm">
                                            <h5>Foter Top Contact Info</h5>
                                            <div class="my-3">
                                                <label for="contact_info_title" class="form-label">Contact Tile
                                                </label>
                                                <input type="text" class=" form-control" id="contact_info_title"
                                                    name="contact_info_title"
                                                    value="{{ $footerTop->contact_info_title }}">
                                                @error('contact_info_title')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="my-3">
                                                <label for="contact_info_address" class="form-label">Contact Info Address
                                                </label>
                                                <input type="text" class=" form-control" id="contact_info_address"
                                                    name="contact_info_address"
                                                    value="{{ $footerTop->contact_info_address }}">
                                                @error('contact_info_address')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="my-3">
                                                <label for="contact_info_number" class="form-label">Contact Info Number
                                                </label>
                                                <input type="text" class=" form-control" id="contact_info_number"
                                                    name="contact_info_number"
                                                    value="{{ $footerTop->contact_info_number }}">
                                                @error('contact_info_number')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="my-3">
                                                <label for="contact_info_email" class="form-label">Contact Info E-mail
                                                </label>
                                                <input type="text" class=" form-control" id="contact_info_email"
                                                    name="contact_info_email"
                                                    value="{{ $footerTop->contact_info_email }}">
                                                @error('contact_info_email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>




                                        </div>

                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card p-3 shadow-sm">
                                            <h5>Foter Top Help Info</h5>
                                            <div class="my-3">
                                                <label for="helop_info_title" class="form-label">Help Title
                                                </label>
                                                <input type="text" class=" form-control" id="helop_info_title"
                                                    name="helop_info_title" value="{{ $footerTop->helop_info_title }}">
                                                @error('helop_info_title')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="my-3">
                                                <label for="login" class="form-label">Login Title
                                                </label>
                                                <input type="text" class=" form-control" id="login"
                                                    name="login" value="{{ $footerTop->login }}">
                                                @error('login')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="my-3">
                                                <label for="register" class="form-label">Register
                                                </label>
                                                <input type="text" class=" form-control" id="register"
                                                    name="register" value="{{ $footerTop->register }}">
                                                @error('register')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                           
                                        </div>

                                    </div>
                                    <div class="my-3">
                                        <button class="btn btn-success">Save Changes</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
    </div>




@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $('#logo').on('change', function(e) {
                show_image.src = URL.createObjectURL(e.target.files[0]);
            });
        });
    </script>


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
