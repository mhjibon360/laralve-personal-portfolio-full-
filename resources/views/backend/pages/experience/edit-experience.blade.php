@extends('backend.layouts.admin-master')
@section('title', 'manage experience section')
@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">
                <h4>Experience section</h4>
            </div>

            <div class="ms-auto">
                <div class="btn-group">
                    <div class="btn-group">

                        <span class="badge bg-success">{{ $exp->updated_at->format('d-M-Y') }}
                            ({{ $exp->updated_at->diffForHumans() }})</span>
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
                                <h5 class="mb-0 text-info">Experience section</h5>
                            </div>
                            <hr />
                            <form action="{{ route('update.experience', $exp->id) }}" method="post"
                                enctype="multipart/form-data">
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
                                            value="{{ $exp->title }}">
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
                                          @enderror">{{ $exp->details }}</textarea>
                                        @error('details')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="phone_icon" class="col-sm-2 col-form-label">Phone Icon(class only)</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control @error('phone_icon') is-invalid @enderror"
                                            id="phone_icon" name="phone_icon" placeholder="enter phone icon class"
                                            value="{{ $exp->phone_icon }}">
                                        @error('phone_icon')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="phone_number" class="col-sm-2 col-form-label">Phone Number</label>
                                    <div class="col-sm-10">
                                        <input type="text"
                                            class="form-control @error('phone_number') is-invalid @enderror"
                                            id="phone_number" name="phone_number" placeholder="enter phone icon class"
                                            value="{{ $exp->phone_number }}">
                                        @error('phone_number')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email_icon" class="col-sm-2 col-form-label">E-mail Icon(class only)</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control @error('email_icon') is-invalid @enderror"
                                            id="email_icon" name="email_icon" placeholder="enter phone icon class"
                                            value="{{ $exp->email_icon }}">
                                        @error('email_icon')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email_address" class="col-sm-2 col-form-label">E-mail Address</label>
                                    <div class="col-sm-10">
                                        <input type="text"
                                            class="form-control @error('email_address') is-invalid @enderror"
                                            id="email_address" name="email_address" placeholder="enter phone icon class"
                                            value="{{ $exp->email_address }}">
                                        @error('email_address')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="image" class="col-sm-2 col-form-label">Left Image</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control dropify" id="image" name="image"
                                            data-default-file="{{ asset($exp->image) }}">
                                        @error('image')
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
