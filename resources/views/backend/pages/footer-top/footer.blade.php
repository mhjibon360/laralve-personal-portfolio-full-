@extends('backend.layouts.admin-master')
@section('title', 'manage footer section caption')
@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">
                <h4>Footer section</h4>
            </div>

            <div class="ms-auto">
                <div class="btn-group">
                    <div class="btn-group">

                        <span class="badge bg-success">{{ $footer->updated_at->format('d-M-Y') }}
                            ({{ $footer->updated_at->diffForHumans() }})</span>
                    </div>
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
                                <h5 class="mb-0 text-info">Footer section Caption</h5>
                            </div>
                            <hr />
                            <form action="{{ route('footer.update',$footer->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="row mb-3">
                                    <label for="left_title" class="col-sm-2 col-form-label">Footer Left Title</label>
                                    <div class="col-sm-10">
                                        <input type="text"
                                            class="form-control @error('left_title')
                                    is-invalid
                                  @enderror"
                                            id="left_title" name="left_title" 
                                            value="{{ $footer->left_title }}">
                                        @error('left_title')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="right_title" class="col-sm-2 col-form-label">Footer Right Title</label>
                                    <div class="col-sm-10">
                                        <input type="text"
                                            class="form-control @error('right_title')
                                    is-invalid
                                  @enderror"
                                            id="right_title" name="right_title" 
                                            value="{{ $footer->right_title }}">
                                        @error('right_title')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-success px-5">Update To Save</button>
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
