<?php

namespace App\Http\Controllers;

use App\Models\stands;
use App\Models\imagenes;
use Illuminate\Http\Request;

class StandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stands = stands::find(2);

        $img = $stands->imagenes()->get();
        
        return view('test', [
            'stands' => $stands,
            'img' => $img
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
     * @param  \App\Models\stands  $stands
     * @return \Illuminate\Http\Response
     */
    public function show(stands $stands)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\stands  $stands
     * @return \Illuminate\Http\Response
     */
    public function edit(stands $stands)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\stands  $stands
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, stands $stands)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\stands  $stands
     * @return \Illuminate\Http\Response
     */
    public function destroy(stands $stands)
    {
        //
    }
}
