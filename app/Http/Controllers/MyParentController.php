<?php

namespace App\Http\Controllers;

use App\Models\my_parent;
use Illuminate\Http\Request;

class MyParentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('livewire.parent.main');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('livewire.parent.main');
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
     * @param  \App\Models\my_parent  $my_parent
     * @return \Illuminate\Http\Response
     */
    public function show(my_parent $my_parent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\my_parent  $my_parent
     * @return \Illuminate\Http\Response
     */
    public function edit(my_parent $my_parent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\my_parent  $my_parent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, my_parent $my_parent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\my_parent  $my_parent
     * @return \Illuminate\Http\Response
     */
    public function destroy(my_parent $my_parent)
    {
        //
    }
}
