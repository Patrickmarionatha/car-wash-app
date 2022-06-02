@extends('mybook.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Booking</h1>
    </div>

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
                        <td class="col-lg-2">
                            @if ($book->status == 'accept')
                            {{-- <a href="{{ route('qr.id', ['id'=>$book->id]) }}">Check QR</a> --}}
                                {{-- button qr --}}
                                <form action="{{ route('qr.id', ['id'=>$book->id]) }}" method="get">
                                    <button type="submit" class="btn btn-info mb-1">Check QR</button>
                                </form>
                                {{-- button cancel --}}
                                <form action="/admin/book/cancel/{{ $book->id }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Cancel</button>
                                </form>
                            @endif
                            @if ($book->status == 'reject')
                                <form action="/book">
                                    <button type="submit" class="btn btn-warning">Book Again Because The Station already Booked!</button>
                                </form>
                            @endif
                            @if ($book->status == 'pending')
                                {{-- button cancel --}}
                                <form action="/admin/book/cancel/{{ $book->id }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Cancel</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
