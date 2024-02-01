@extends('backend.layouts.admin-master')
@section('title', 'website seo setting change')
@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">
                <h4>Manage Seo Setting</h4>
            </div>

            <div class="ms-auto">
                <div class="btn-group">

                    <span class="badge bg-success">{{ $seoSetting->updated_at->format('d-M-Y') }}
                        ({{ $seoSetting->updated_at->diffForHumans() }})</span>
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
                                <h5 class="mb-0 text-info">Manage Website Seo Setting</h5>
                            </div>
                            <hr />
                            <form action="{{ route('seo.setting.update', $seoSetting->id) }}" method="post">
                                @csrf
                                @method('PUT')

                                <div class="my-3">
                                    <label for="author_name" class="form-label"> Author Name</label>
                                    <input type="text" class="form-control" id="author_name" name="author_name"
                                        value="{{ $seoSetting->author_name }}">
                                    @error('author_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="my-3">
                                    <label for="meta_title" class="form-label"> Meta Title</label>
                                    <input type="text" class="form-control" id="meta_title" name="meta_title"
                                        value="{{ $seoSetting->meta_title }}">
                                    @error('meta_title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="my-3">
                                    <label for="meta_keyword" class="form-label"> Meta Keyword</label>
                                    <input type="text" class="form-control" data-role="tagsinput" id="meta_keyword"
                                         name="meta_keyword" value="{{ $seoSetting->meta_keyword }}">
                                    @error('meta_keyword')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="my-3">
                                    <label for="meta_keyword" class="form-label"> Meta Descriptions</label>
                                    <textarea name="meta_descriptions" id="meta_descriptions" class=" form-control" name="meta_descriptions" rows="5">{{ $seoSetting->meta_descriptions }}</textarea>
                                    @error('meta_descriptions')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="my-3">
                                    <button type="submit" class="btn btn-success px-5">Update To Save</button>
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
    <script>
        $(document).ready(function() {
            $('#logo').on('change', function(e) {
                show_logo_image.src = URL.createObjectURL(e.target.files[0]);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#favicon').on('change', function(e) {
                show_favicon_image.src = URL.createObjectURL(e.target.files[0]);
            });
        });
    </script>
    <link href="{{ asset('backend') }}/assets/plugins/input-tags/css/tagsinput.css" rel="stylesheet" />
    <script src="{{ asset('backend') }}/assets/plugins/input-tags/js/tagsinput.js"></script>
@endpush
