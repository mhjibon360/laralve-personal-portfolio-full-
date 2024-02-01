@extends('backend.layouts.admin-master')
@section('title', 'admin dashboard')
@section('content')
    <style>
        .email {
            position: absolute;
            top: 20%;

        }
    </style>
    <div class="page-content">
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
            <div class="col">
                <div class="card radius-10 border-start border-0 border-3 border-info">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Total Services</p>
                                <h4 class="my-1 text-info">Active: {{ $activetotalServics }}</h4>
                                <p class="mb-0 font-13">Inactive : <span
                                        class="text-danger">{{ $inactivetotalServics }}</span></p>
                            </div>
                            <div class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto"><i
                                    class='bx bxs-cart'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 border-start border-0 border-3 border-danger">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Total Portfolio</p>

                                <h4 class="my-1 text-primary">Active: {{ $activetotalportfolio }}</h4>
                                <p class="mb-0 font-13">Inactive : <span
                                        class="text-danger">{{ $inactivetotalportfolio }}</span></p>
                            </div>
                            <div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto"><i
                                    class='bx bxs-wallet'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 border-start border-0 border-3 border-success">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Total Skills:</p>
                                <h4 class="my-1 text-success">Active: {{ $activetotalskill }}</h4>
                                <p class="mb-0 font-13">Inactive : <span class="text-danger">{{ $inactivetotalskill }}
                                </p>
                            </div>
                            <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto"><i
                                    class='bx bxs-bar-chart-alt-2'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 border-start border-0 border-3 border-warning">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Total Blog</p>
                                <h4 class="my-1 text-warning">Active: {{ $activetotalblog }}</h4>
                                <p class="mb-0 font-13">
                                    Inactive : <span class="text-danger">{{ $inactivetotalblog }}

                                </p>
                            </div>
                            <div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto"><i
                                    class='bx bxs-group'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end row-->



        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <h6 class="mb-0">Recent Contact Message</h6>
                    </div>
                    <div class="dropdown ms-auto">
                        <strong class=" shadow p-1 bg-primary text-white">Total : {{ $contactMessagecount }}</strong>

                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Si</th>
                                <th>Name</th>
                                <th>E-mail</th>
                                <th>subject</th>
                                <th>Message</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contactMessage as $key => $message)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $message->name }}</td>
                                    <td>{{ $message->email }}</td>
                                    <td>{{ $message->subject }}</td>
                                    <td>{{ $message->message }}</td>
                                    <td>
                                        {{ $message->created_at->format('d F') }}
                                        <br>
                                        <span class="text-success">{{ $message->created_at->diffForHumans() }} </span>
                                        <br>
                                        <span class="text-primary">
                                            {{ $message->created_at->format('h:i:s A') }}
                                        </span>
                                    </td>
                                    <td>




                                        <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal{{ $message->id }}">view</button>
                                        <a href="{{ route('user.message.delete', $message->id) }}"
                                            class="btn btn-danger btn-sm" id="delete_btn">delete</a>
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                    {{ $contactMessage->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">

                @foreach ($contactMessage as $key => $message)
                    <div class="modal fade" id="exampleModal{{ $message->id }}" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <div>
                                        <h5 class="modal-title" id="exampleModalLabel">{{ $message->subject }}</h5>

                                    </div>
                                    <br>

                                    <div class="email my-3">
                                        <span class="text-success">{{ $message->email }}</span>

                                    </div>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    {!! $message->message !!}
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
@push('style')
    <link href="{{ asset('backend') }}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
@endpush
@push('scripts')
    {{-- <script src="{{ asset('backend') }}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="{{ asset('backend') }}/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="{{ asset('backend') }}/assets/plugins/chartjs/js/Chart.min.js"></script>
    <script src="{{ asset('backend') }}/assets/plugins/chartjs/js/Chart.extension.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            $(document).on('click', '#delete_btn', function(event) {
                event.preventDefault()
                var link = $(this).attr('href');
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be delete this user message!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = link;
                        Swal.fire({
                            title: "Deleted!",
                            text: "user message has been deleted.",
                            icon: "success"
                        });
                    }
                });
            });
        });
    </script>
@endpush
