@extends('backend.layouts.admin-master')
@section('title', 'add news portfolio category')
@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">
                <h4>Add New Portfolio category</h4>
            </div>

            <div class="ms-auto">
                <div class="btn-group">
                   
                    <a href="{{ route('portfolio-category.index') }}" class="btn btn-info px-4 radius-30 text-white"><i
                            class="lni lni-list"></i> List
                    </a>
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
                                <div><i class="bx bxs-user me-1 font-22 text-info"></i>
                                </div>
                                <h5 class="mb-0 text-info">Add New Portflio Category</h5>
                            </div>
                            <hr />
                            <form action="{{ route('portfolio-category.store') }}" method="post">
                                @csrf
                                @method('POST')
                                <div class="row mb-3">
                                    <label for="category_name" class="col-sm-2 col-form-label">Category Name</label>
                                    <div class="col-sm-10">
                                        <input type="text"
                                            class="form-control @error('category_name')
                                    is-invalid
                                  @enderror"
                                            id="category_name" name="category_name" placeholder="enter category name"
                                            value="{{ old('category_name') }}">
                                        @error('category_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-success px-5">Create To Save</button>
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
