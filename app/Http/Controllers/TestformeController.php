<?php

namespace App\Http\Controllers;

use App\testforme;
use Illuminate\Http\Request;

class TestformeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user=testforme::all();
        return view('form' , compact($user));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
     * @param  \App\testforme  $testforme
     * @return \Illuminate\Http\Response
     */
    public function show(testforme $testforme)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\testforme  $testforme
     * @return \Illuminate\Http\Response
     */
    public function edit(testforme $testforme)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\testforme  $testforme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, testforme $testforme)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\testforme  $testforme
     * @return \Illuminate\Http\Response
     */
    public function destroy(testforme $testforme)
    {
        //
    }
}
