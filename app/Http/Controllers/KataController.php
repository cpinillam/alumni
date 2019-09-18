<?php

namespace App\Http\Controllers;

use App\Kata;
use Illuminate\Http\Request;

class KataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kataList = Kata::all();
        return view('kata', ['kataList' => $kataList]);
    }


    public function create()
    {
        return view('Kata.create');
    }

    public function store(Request $request)
    {
        Kata::create($request->all());
        return redirect('kata/create');
    }

    public function show(Kata $kata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kata  $kata
     * @return \Illuminate\Http\Response
     */
    public function edit($katum)
    {
        $kata = Kata::where('id', $katum)->get();
        return view('kata/edit',  ['kata' => $kata]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kata  $kata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kata $kata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kata  $kata
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kata $kata)
    {
        //
    }
}
