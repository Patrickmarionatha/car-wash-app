<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\MyBook;
use App\Http\Requests\StoreMyBookRequest;
use App\Http\Requests\UpdateMyBookRequest;

class MyBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mybook.index', [
            'title' => 'My Booking',
            'books' => Book::where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function getDisplay($id)
    {
        $project = Book::find($id);

        return view('mybook.qrcode')->with('id', $id);
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
     * @param  \App\Http\Requests\StoreMyBookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMyBookRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MyBook  $myBook
     * @return \Illuminate\Http\Response
     */
    public function show(MyBook $myBook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MyBook  $myBook
     * @return \Illuminate\Http\Response
     */
    public function edit(MyBook $myBook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMyBookRequest  $request
     * @param  \App\Models\MyBook  $myBook
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMyBookRequest $request, MyBook $myBook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MyBook  $myBook
     * @return \Illuminate\Http\Response
     */
    public function destroy(MyBook $myBook)
    {
        //
    }
}
