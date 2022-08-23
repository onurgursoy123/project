<?php

namespace App\Http\Controllers;

use App\Models\Booksbuyer;
use App\Http\Requests\StoreBooksbuyerRequest;
use App\Http\Requests\UpdateBooksbuyerRequest;
use App\Models\BooksSupply;
use App\Models\Users;

class BooksbuyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
     * @param  \App\Http\Requests\StoreBooksbuyerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBooksbuyerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booksbuyer  $booksbuyer
     * @return \Illuminate\Http\Response
     */
    public function show(Booksbuyer $booksbuyer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booksbuyer  $booksbuyer
     * @return \Illuminate\Http\Response
     */
    public function edit(Booksbuyer $booksbuyer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBooksbuyerRequest  $request
     * @param  \App\Models\Booksbuyer  $booksbuyer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBooksbuyerRequest $request, Booksbuyer $booksbuyer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booksbuyer  $booksbuyer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booksbuyer $booksbuyer)
    {
        //
    }
}
