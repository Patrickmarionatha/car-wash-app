<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // check if user admin
        if (auth()->user()->role != 'admin') {
            return redirect('/');
        }
        return view('admin.index', [
            'title' => 'Admin',
            // ascending order
            'books' => Book::orderBy('datepicker', 'asc')->orderby('booktime', 'asc')->get()
        ]);
    }

    public function accept($id)
    {
        $book = Book::find($id);
        $book->status = 'accept';
        $book->save();
        //flash message accept
        session()->flash('accept', 'Booking Accepted!');
        return redirect()->route('admin');
    }

    public function reject($id)
    {
        $book = Book::find($id);
        $book->status = 'reject';
        $book->save();
        //flash message reject
        session()->flash('reject', 'Booking Rejected!');
        return redirect()->route('admin');
    }

    public function delete($id)
    {
        $book = Book::find($id);
        $book->delete();
        //flash message delete
        session()->flash('delete', 'Booking Deleted!');
        return redirect()->route('admin');
    }

    public function done($id)
    {
        $book = Book::find($id);
        $book->status = 'done';
        $book->save();
        //flash message done
        session()->flash('done', 'Booking Done!');
        return redirect()->route('admin');
    }

    public function cancel($id)
    {
        $book = Book::find($id);
        $book->status = 'cancel';
        $book->save();
        //flash message cancel
        session()->flash('cancel', 'Booking Canceled!');
        return redirect()->route('admin');
    }

    // search
    public function search(Request $request)
    {
        $search = $request->get('search');
        $books = Book::where('id', 'like', '%' . $request->id . '%')->get();
        return view('admin.search', [
            'title' => 'Admin',
            'books' => $books
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
