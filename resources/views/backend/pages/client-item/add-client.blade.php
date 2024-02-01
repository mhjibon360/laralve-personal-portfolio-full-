@extends('backend.layouts.admin-master')
@section('title', 'add news client')
@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">
                <h4>Add new client</h4>
            </div>

            <div class="ms-auto">
                <div class="btn-group">
                    {{-- <a href="{{ route('type.index') }}" class="btn btn-success"><i class="lni lni-circle-plus"></i>Create
                        New</a> --}}
                    <a href="{{ route('client-item.index') }}" class="btn btn-info px-4 radius-30 text-white"><i
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
                                <h5 class="mb-0 text-info">Add New client</h5>
                            </div>
                            <hr />
                            <form action="{{ route('client-item.store') }}" method="post">
                                @csrf
                                @method('POST')
                                <div class="row mb-3">
                                    <label for="icon" class="col-sm-2 col-form-label">Icon(class only)</label>
                                    <div class="col-sm-10">
                                        <input type="text"
                                            class="form-control @error('icon')
                                    is-invalid
                                  @enderror"
                                            id="icon" name="icon" placeholder="enter icon heading"
                                            value="{{ old('icon') }}" >
                                        @error('icon')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Client Name</label>
                                    <div class="col-sm-10">
                                        <input type="text"
                                            class="form-control @error('name')
                                    is-invalid
                                  @enderror"
                                            id="name" name="name" placeholder="enter name heading"
                                            value="{{ old('name') }}">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="role" class="col-sm-2 col-form-label">Client Role</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control @error('role')is-invalid @enderror"
                                            id="role" role="role" placeholder="enter role heading"
                                            value="{{ old('role') }}" name="role">
                                        @error('role')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="comment" class="col-sm-2 col-form-label">client comment</label>
                                    <div class="col-sm-10">
                                        <textarea name="comment" id="comment" rows="3"
                                            class="form-control @error('comment')
                                            is-invalid
                                          @enderror"
                                            placeholder="enter client comment..">{{ old('comment') }}</textarea>
                                        @error('comment')
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
