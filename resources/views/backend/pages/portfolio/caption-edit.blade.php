@extends('backend.layouts.admin-master')
@section('title', 'manage portfolio section caption')
@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">
                <h4>portfolio section caption</h4>
            </div>

            <div class="ms-auto">
                <div class="btn-group">
                  <div class="btn-group">

                    <span class="badge bg-success">{{ $portfolio->updated_at->format('d-M-Y') }}
                        ({{ $portfolio->updated_at->diffForHumans() }})</span>
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
                                <h5 class="mb-0 text-info">Portfolio section Caption</h5>
                            </div>
                            <hr />
                            <form action="{{ route('update.portfolioCaoption', $portfolio->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="row mb-3">
                                    <label for="title" class="col-sm-2 col-form-label">Heading</label>
                                    <div class="col-sm-10">
                                        <input type="text"
                                            class="form-control @error('title')
                                    is-invalid
                                  @enderror"
                                            id="title" name="title" placeholder="enter title"
                                            value="{{ $portfolio->title }}">
                                        @error('title')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="details" class="col-sm-2 col-form-label">Details</label>
                                    <div class="col-sm-10">
                                        <textarea name="details" id="details" rows="3"
                                            class="form-control @error('details')
                                            is-invalid
                                          @enderror">{{ $portfolio->details }}</textarea>
                                        @error('details')
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
