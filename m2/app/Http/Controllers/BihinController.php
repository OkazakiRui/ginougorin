<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorebihinRequest;
use App\Http\Requests\UpdatebihinRequest;
use App\Models\bihin;

class BihinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorebihinRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorebihinRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\bihin  $bihin
     * @return \Illuminate\Http\Response
     */
    public function show(bihin $bihin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bihin  $bihin
     * @return \Illuminate\Http\Response
     */
    public function edit(bihin $bihin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebihinRequest  $request
     * @param  \App\Models\bihin  $bihin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatebihinRequest $request, bihin $bihin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bihin  $bihin
     * @return \Illuminate\Http\Response
     */
    public function destroy(bihin $bihin)
    {
        //
    }
}
