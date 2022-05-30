<?php

namespace App\Http\Controllers;

use App\Models\MyBook;
use App\Models\Book;
use App\Models\Qrcode;
use Illuminate\Http\Request;

class QrCodeController extends Controller
{
    public function index()
    {
        return view('mybook.qrcode', [
            'title' => 'My Booking',
        ]);
    }

    public function code(Request $request)
    {
        Qrcode::create($request);
    }
}
