@extends('backend.layouts.admin-master')
@section('title', 'all blog item list')
@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">
                <h4>All Blog List</h4>
            </div>

            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{ route('blog-item.create') }}" class="btn btn-success px-4 radius-30 text-white"><i
                            class="lni lni-circle-plus"></i> Create
                    </a>
                </div>
            </div>
        </div>
        <!--end row-->
        <div class="row">
            <div class="col-xl-12 mx-auto">
                <hr />
                <div class="card border-top border-0 border-4 border-info">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-center">
                                <div>
                                    <i class="lni lni-text-format-remove"></i>
                                </div>
                                <h5 class="mb-0 text-info">All blog Item</h5> &nbsp;&nbsp;
                                <button type="button" class="btn btn-outline-success position-relative me-lg-5"> <i
                                        class="bx bx-comment-detail align-middle"></i> Total <span
                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">{{ count($blogs) }}
                                        <span class="visually-hidden">unread messages</span></span>
                                </button>
                            </div>
                            <hr />
                            <div class="table-responsive">
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Si</th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Details</th>
                                            <th>Category</th>
                                            <th>Tags</th>
                                            <th>Created By</th>
                                            <th>C.Time</th>
                                            <th>U.Time</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($blogs as $key => $item)
                                            <tr>
                                                <td>
                                                    {{ $key + 1 }}
                                                </td>
                                                <td>
                                                    <img class=" img-fluid" style="height: 50px;width:50px;"
                                                        src="{{ asset($item->image) }}" alt="">
                                                </td>
                                                <td>
                                                    {{ $item->title }}
                                                </td>
                                                <td>
                                                    {!! Str::limit(strip_tags($item->details), 20, '...') !!}
                                                </td>
                                                <td>{{ $item->categories['category_name'] }}</td>
                                                <td>{{ $item->tags }}</td>
                                                <td>{{ $item->users['name'] }}</td>
                                                <td class="text-center">
                                                    {{ $item->created_at->format('d-M-Y') }}
                                                    <hr>
                                                    <span
                                                        class="text-success">{{ $item->created_at->diffForHumans() }}</span>
                                                </td>
                                                <td class="text-center">
                                                    @if ($item->updated_at)
                                                        {{ $item->updated_at->format('d-M-Y') }}
                                                        <hr>
                                                        <span
                                                            class="text-info">{{ $item->updated_at->diffForHumans() }}</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($item->status == '1')
                                                        <span class="badge rounded-pill bg-success">Active</span>
                                                    @else
                                                        <span class="badge rounded-pill bg-danger">InActive</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('blog-item.edit', $item->id) }}"
                                                        class="btn btn-info btn-sm">
                                                        <i class="lni lni-pencil"></i>
                                                    </a>

                                                    <form action="{{ route('blog-item.destroy', $item->id) }}"
                                                        method="post" class=" d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button id="delete_btn" class="btn btn-danger btn-sm">
                                                            <i class="lni lni-trash"></i>
                                                        </button>
                                                    </form>

                                                    @if ($item->status == '1')
                                                        <a href="{{ route('blog-item.show', $item->id) }}"
                                                            class="btn btn-warning btn-sm" title="click to inactive">
                                                            <i class="lni lni-thumbs-down"></i>
                                                        </a>
                                                    @else
                                                        <a href="{{ route('blog-item.show', $item->id) }}"
                                                            class="btn btn-success btn-sm" title="click to active">
                                                            <i class="lni lni-thumbs-up"></i>
                                                        </a>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
    </div>
@endsection
@push('scripts')
    <link href="{{ asset('backend') }}/assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <script src="{{ asset('backend') }}/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('backend') }}/assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

    <script script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <SCript>
        $(document).ready(function() {
            $(document).on('click', '#delete_btn', function(event) {
                event.preventDefault();
                var form = $(this).closest("form");
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be delete this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                        Swal.fire({
                            title: "Deleted!",
                            text: "Your file has been deleted.",
                            icon: "success"
                        });
                    }
                });
            });
        });
    </SCript>
@endpush
