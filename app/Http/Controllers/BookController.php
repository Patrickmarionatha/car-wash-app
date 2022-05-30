<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Qrcode;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BookController extends Controller
{
    public function index()
    {
        return view('book.index', [
            'title' => 'Book'
        ]);
    }

    public function booking(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'user_id' => 'required',
            'cartype' => 'required|max:255',
            'carbrand' => 'required|max:255',
            'lisenceplate' => 'required|max:255',
            'datepicker' => 'required',
            'booktime' => 'required',
            'bookstation' => 'required',
            'bookservice' => 'required',
            'payment' => 'required'
        ]);

        Book::create($validatedData);

        $request->session()->flash('booked', 'Booking successfull!');
        return redirect('/mybook');
    }
}
