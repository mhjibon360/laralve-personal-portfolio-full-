@extends('backend.layouts.admin-master')
@section('title', 'add news typed text')
@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">
                <h4>Manage Home</h4>
            </div>

            <div class="ms-auto">
                <div class="btn-group">
                    {{-- <a href="{{ route('type.index') }}" class="btn btn-success"><i class="lni lni-circle-plus"></i>Create
                        New</a> --}}
                    {{-- <a href="{{ route('type.index') }}" class="btn btn-info px-4 radius-30 text-white"><i
                            class="lni lni-list"></i> List
                    </a> --}}
                    <span class="badge bg-success">{{ $hero->updated_at->format('d-M-Y') }}
                        ({{ $hero->updated_at->diffForHumans() }})</span>
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
                                <div><i class="bx bxs-home me-1 font-22 text-info"></i>
                                </div>
                                <h5 class="mb-0 text-info">Manage Your Hero/Home Content</h5>
                            </div>
                            <hr />
                            <form action="{{ route('update.home', $hero->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <input type="hidden" value="{{ $hero->id }}" name="id">
                                <div class="my-3">
                                    <label for="title" class="form-label"> Heading Title</label>
                                    <input type="text"
                                        class="form-control @error('title')
                                    is-invalid
                                  @enderror"
                                        id="title" name="title" placeholder="enter heading title"
                                        value="{{ $hero->title }}">
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                                <div class="my-3">
                                    <label for="details" class="form-label"> Small Details</label>
                                    <textarea name="details" id="details" rows="4"
                                        class="form-control @error('details')
                                  is-invalid
                                @enderror"
                                        placeholder="write your small details..">{{ $hero->details }}</textarea>
                                    @error('details')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                                <div class="my-3">
                                    <label for="btn_text" class="form-label"> Button Text</label>
                                    <input type="text"
                                        class="form-control @error('btn_text')
                                  is-invalid
                                @enderror"
                                        id="btn_text" name="btn_text" placeholder="enter button text"
                                        value="{{ $hero->btn_text }}">
                                    @error('btn_text')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="my-3">
                                    <label for="image" class="form-label"> Background Overly Image</label>
                                    <input type="file" class="form-control dropify" id="image" name="image"
                                        data-default-file="{{ asset($hero->image) }}">
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
