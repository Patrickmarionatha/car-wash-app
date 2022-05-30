@extends('mybook.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My QR Code</h1>
    </div>

    <div class="card col-lg-auto">
        <div class="card-body">
            {{ QrCode::size(300)->generate(DB::table('books')->select('id')->where('id', '2')->get()) }}
        </div>
    </div>
@endsection
