@extends('admin.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My QR Code</h1>
    </div>
    <div class="row">
        <div class="card col-3">
            <div class="card-head text-center">
                QR Code Book {{ $id }}
            </div>
            <div class="card-body justify-content-center">
                {{ QrCode::size(270)->generate(DB::table('books')->select('id')->where('id', $id)->get()) }}
            </div>
        </div>
    </div>
@endsection
