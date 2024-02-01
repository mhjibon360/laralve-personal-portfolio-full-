@extends('backend.layouts.admin-master')
@section('title', 'change setting')
@section('content')
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">
                <h4>Setting</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">setting</p>
                                <h4 class="my-1">General Setting</h4>
                                <p class="mb-0 font-13 text-success"><i class="bx bxs-up-arrow align-middle"></i>
                                    <a href="{{ route('general.setting') }}">Go to General setting</a>
                                </p>
                            </div>
                            <div class="widgets-icons bg-light-success text-success ms-auto"><i
                                    class='bx bx-cog bx-spin'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">setting</p>
                                <h4 class="my-1">Seo Setting</h4>
                                <p class="mb-0 font-13 text-danger"><i class="bx bxs-up-arrow align-middle"></i>
                                    <a href="{{ route('seo.setting') }}">Go to Seo Setting</a>
                                </p>
                            </div>
                            <div class="widgets-icons bg-light-danger text-danger ms-auto"><i
                                    class='bx bx-search bx-burst'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
