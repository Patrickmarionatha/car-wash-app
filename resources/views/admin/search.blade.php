@extends('admin.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">All Booking</h1>
    </div>

    {{-- search box id --}}
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.search') }}" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control" name="id" placeholder="Search by ID" autofocus>
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="submit">
                                    <i class="fa fa-search">search</i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    {{-- session accept --}}
    @if(Session::has('accept'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session::get('accept') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    {{-- session reject --}}
    @if(Session::has('reject'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ Session::get('reject') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    {{-- session done --}}
    @if(Session::has('done'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session::get('done') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    {{-- session cancel --}}
    @if(Session::has('cancel'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ Session::get('cancel') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    {{-- session delete --}}
    @if(Session::has('delete'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ Session::get('delete') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">Booking ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Car Type</th>
                    <th scope="col">Car Brand</th>
                    <th scope="col">Lisence Plate</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Station</th>
                    <th scope="col">Service</th>
                    <th scope="col">Payment</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->id }}</td>
                        <td>{{ $book->name }}</td>
                        <td>{{ $book->cartype }}</td>
                        <td>{{ $book->carbrand }}</td>
                        <td>{{ $book->lisenceplate }}</td>
                        <td>{{ $book->datepicker }}</td>
                        <td>{{ $book->booktime }}</td>
                        <td>{{ $book->bookstation }}</td>
                        <td>{{ $book->bookservice }}</td>
                        <td>{{ $book->payment }}</td>
                        <td>{{ $book->status }}</td>
                        <td>
                            @if ($book->status == 'pending')
                                {{-- button accept --}}
                                <form action="/admin/book/accept/{{ $book->id }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-success mb-1">Accept</button>
                                </form>
                                {{-- button reject --}}
                                <form action="/admin/book/reject/{{ $book->id }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Reject</button>
                                </form>
                            @endif
                            @if ($book->status == 'accept')
                                {{-- button done --}}
                                <form action="/admin/book/done/{{ $book->id }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-success mb-1">Done</button>
                                </form>
                                {{-- button cancel --}}
                                <form action="/admin/book/cancel/{{ $book->id }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Cancel</button>
                                </form>
                            @endif
                            @if ($book->status == 'done')
                                {{-- button delete --}}
                                <form action="/admin/book/delete/{{ $book->id }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            @endif
                            @if ($book->status == 'cancel')
                                {{-- button delete --}}
                                <form action="/admin/book/delete/{{ $book->id }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            @endif
                            @if ($book->status == 'reject')
                                {{-- button delete --}}
                                <form action="/admin/book/delete/{{ $book->id }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
