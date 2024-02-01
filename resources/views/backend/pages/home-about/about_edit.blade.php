@extends('backend.layouts.admin-master')
@section('title', 'manage home about content')
@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">
                <h4>Manage Home-About</h4>
            </div>

            <div class="ms-auto">
                <div class="btn-group">

                    <span class="badge bg-success">{{ $about->updated_at->format('d-M-Y') }}
                        ({{ $about->updated_at->diffForHumans() }})</span>
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
                                <h5 class="mb-0 text-info">Manage Your Home/About Content</h5>
                            </div>
                            <hr />
                            <form action="{{ route('update.home.about', $about->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <input type="hidden" value="{{ $about->id }}" name="id">

                                <div class="my-3">
                                    <label for="heading" class="form-label"> Heading Title</label>
                                    <input type="text"
                                        class="form-control @error('heading')
                                    is-invalid
                                  @enderror"
                                        id="heading" name="heading" placeholder="enter heading heading"
                                        value="{{ $about->heading }}">
                                    @error('heading')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="my-3">
                                    <label for="leading" class="form-label"> Leadint</label>
                                    <input type="text"
                                        class="form-control @error('leading')
                                    is-invalid
                                  @enderror"
                                        id="leading" name="leading" placeholder="enter leading"
                                        value="{{ $about->leading }}">
                                    @error('leading')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                                <div class="my-3">
                                    <label for="details" class="form-label"> Small Details</label>
                                    <textarea name="details" id="details" rows="4"
                                        class="form-control @error('details')
                                  is-invalid
                                @enderror"
                                        placeholder="write your small details..">{{ $about->details }}</textarea>
                                    @error('details')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>




                                <div class="my-3">
                                    <label for="cv_file" class="form-label"> Attach Your Cv File</label>
                                    <input type="file" class="form-control dropify" id="cv_file" name="cv_file"
                                        data-default-file="{{ asset($about->cv_file) }}">
                                    @error('cv_file')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="my-3">
                                    <label for="image" class="form-label"> Left Side Profile image</label>
                                    <input type="file" class="form-control dropify" id="image" name="image"
                                        data-default-file="{{ asset($about->image) }}">
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
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
