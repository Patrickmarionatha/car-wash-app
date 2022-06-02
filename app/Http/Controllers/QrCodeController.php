<?php

namespace App\Http\Controllers;

use App\Models\MyBook;
use App\Models\Book;
use App\Models\Qrcode;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Echo_;

class QrCodeController extends Controller
{
    public function index($id)
    {
        $qr = Book::find($id);
        return view('mybook.qrcode', [
            'title' => 'Qr Code',
        ])->with('id', $id);
    }

    public function code(Request $request)
    {
        //test
        Qrcode::create($request);
    }
}
