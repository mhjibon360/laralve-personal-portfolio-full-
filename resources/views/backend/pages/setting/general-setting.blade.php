@extends('backend.layouts.admin-master')
@section('title', 'website general setting change')
@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">
                <h4>Manage General Setting</h4>
            </div>

            <div class="ms-auto">
                <div class="btn-group">

                    <span class="badge bg-success">{{ $generalSetting->updated_at->format('d-M-Y') }}
                        ({{ $generalSetting->updated_at->diffForHumans() }})</span>
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
                                <h5 class="mb-0 text-info">Manage Website General Setting</h5>
                            </div>
                            <hr />
                            <form action="{{ route('general.setting.update', $generalSetting->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="my-3">
                                                    <label for="logo" class="form-label"> Navbar Logo</label>
                                                    <input type="file" class="form-control" id="logo" name="logo"
                                                        value="">
                                                    @error('logo')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <img src="{{ asset($generalSetting->logo) }}" id="show_logo_image"
                                                    class="show_logo_image img-fluid" style="height: 100px;width:100px;"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="my-3">
                                                    <label for="favicon" class="form-label"> Website Favicon</label>
                                                    <input type="file" class="form-control" id="favicon" name="favicon"
                                                        value="">
                                                    @error('favicon')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <img src="{{ asset($generalSetting->favicon) }}" id="show_favicon_image"
                                                    class="show_favicon_image img-fluid" style="height: 100px;width:100px;"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="my-3">
                                            <label for="home_page_title" class="form-label"> Home Page Title</label>
                                            <input type="text" class="form-control " id="home_page_title"
                                                name="home_page_title" value="{{ $generalSetting->home_page_title }}">
                                            @error('home_page_title')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="my-3">
                                            <label for="all_blog_page_title" class="form-label"> All Blog Page Title</label>
                                            <input type="text" class="form-control " id="all_blog_page_title"
                                                name="all_blog_page_title"
                                                value="{{ $generalSetting->all_blog_page_title }}">
                                            @error('all_blog_page_title')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="my-3">
                                            <label for="all_portfolio_page_title" class="form-label"> All Portfolio Page
                                                Title</label>
                                            <input type="text" class="form-control " id="all_portfolio_page_title"
                                                name="all_portfolio_page_title"
                                                value="{{ $generalSetting->all_portfolio_page_title }}">
                                            @error('all_portfolio_page_title')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>


                                <div class="my-3">
                                    <button type="submit" class="btn btn-info px-5">Update To Save</button>
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
                show_logo_image.src = URL.createObjectURL(e.target.files[0]);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#favicon').on('change', function(e) {
                show_favicon_image.src = URL.createObjectURL(e.target.files[0]);
            });
        });
    </script>
@endpush
