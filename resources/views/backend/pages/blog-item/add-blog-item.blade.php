@extends('backend.layouts.admin-master')
@section('title', 'add blog post')
@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">
                <h4>Add blog Post</h4>
            </div>

            <div class="ms-auto">
                <div class="btn-group">

                    <a href="{{ route('blog-item.index') }}" class="btn btn-info px-4 radius-30 text-white"><i
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
                                <div><i class="bx bxs-contact me-1 font-22 text-info"></i>
                                </div>
                                <h5 class="mb-0 text-info">Add Blog Post</h5>
                            </div>
                            <hr />
                            <form action="{{ route('blog-item.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('POST')

                                <div class="my-3">
                                    <label for="category_id" class="form-label"> Blog Category</label>

                                    <select name="category_id" id="category_id" class="form-control single-select">
                                        <option value="" selected disabled>--select one category--</option>
                                        @foreach ($blogCategories as $category)
                                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>


                                    @error('category_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="my-3">
                                    <label for="title" class="form-label"> Blog Post Title</label>
                                    <input type="text"
                                        class="form-control @error('title')
                                    is-invalid
                                  @enderror"
                                        id="title" name="title" placeholder="enter title" value="{{ old('title') }}">
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="my-3">
                                    <label for="details" class="form-label"> Blog Post Details</label>
                                    <textarea name="details" id="details" rows="4"
                                        class="form-control @error('details')
                                  is-invalid
                                @enderror"
                                        placeholder="write your small details..">{{ old('details') }}</textarea>
                                    @error('details')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                                <div class="my-3">
                                    <label for="tags" class="form-label"> Blog Post Tags</label>
                                    <input type="text"
                                        class="form-control @error('tags')
                                  is-invalid
                                @enderror"
                                        data-role="tagsinput" id="tags" name="tags" placeholder="enter tags"
                                        value="{{ old('tags') }}">
                                    @error('tags')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                                <div class="my-3">
                                    <label for="image" class="form-label"> Blog Post Image</label>
                                    <input type="file" class="form-control dropify" id="image" name="image"
                                        data-default-file="">
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="my-3">
                                    <button type="submit" class="btn btn-success px-5">Create To Save</button>
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


    <link href="{{ asset('backend') }}/assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
    <link href="{{ asset('backend') }}/assets/plugins/select2/css/select2-bootstrap4.css" rel="stylesheet" />
    <script src="{{ asset('backend') }}/assets/plugins/select2/js/select2.min.js"></script>
    <script>
        $('.single-select').select2({
            theme: 'bootstrap4',
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            allowClear: Boolean($(this).data('allow-clear')),
        });
    </script>

    <script src='https://cdn.tiny.cloud/1/vdqx2klew412up5bcbpwivg1th6nrh3murc6maz8bukgos4v/tinymce/5/tinymce.min.js'
        referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#details'
        });
    </script>

    <link href="{{ asset('backend') }}/assets/plugins/input-tags/css/tagsinput.css" rel="stylesheet" />
    <script src="{{ asset('backend') }}/assets/plugins/input-tags/js/tagsinput.js"></script>
@endpush
