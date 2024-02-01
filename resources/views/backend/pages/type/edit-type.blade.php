@extends('backend.layouts.admin-master')
@section('title', 'edit typed text')
@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">
                <h4>Edit Animated Typed Text</h4>
            </div>

            <div class="ms-auto">
                <div class="btn-group">
                    {{-- <a href="{{ route('type.index') }}" class="btn btn-success"><i class="lni lni-circle-plus"></i>Create
                        New</a> --}}
                    <a href="{{ route('type.index') }}" class="btn btn-info px-4 radius-30 text-white"><i
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
                                <h5 class="mb-0 text-info">Edit Animated Text To Your Skills</h5>
                            </div>
                            <hr />
                            <form action="{{ route('type.update',$typed->id) }}" method="post">

                                @csrf
                                @method('PUT')
                                <div class="row mb-3">
                                    <label for="itype_text" class="col-sm-2 col-form-label">Animated Title</label>
                                    <div class="col-sm-10">
                                        <input type="text"
                                            class="form-control @error('type_text')
                                    is-invalid
                                  @enderror"
                                            id="itype_text" name="type_text" placeholder="enter animated title"
                                            value="{{ $typed->type_text }}">
                                        @error('type_text')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-info px-5">Update To Save</button>
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
