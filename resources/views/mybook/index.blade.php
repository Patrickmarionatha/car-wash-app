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
                    <th scope="col">Station</th>
                    <th scope="col">Service</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->id }}</td>
                        <td>{{ $book->bookstation }}</td>
                        <td>{{ $book->bookservice }}</td>
                        <td>{{ $book->datepicker }}</td>
                        <td>{{ $book->booktime }}</td>
                        {{-- <td><a href="mybook/qrcode/{{ $book->id }}">Check QR</a></td> --}}
                        <td><a href="{{ route('qr.id', ['id'=>$book->id]) }}">Check QR</a></td>
                        {{-- <td><a href=" url('mybook/getDisplay/{id}' . $book->id) ">Check QR</a></td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
