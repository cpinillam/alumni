<?php

namespace App\Http\Controllers;

use App\Kata;
use Illuminate\Http\Request;

class KataController extends Controller
{
    public function index()
    {
        $kata = Kata::all();
        return view('/kata', ['katas' => $kata]);
    }

    public function create()
    {
        $kata = new Kata();
        return view('Kata.create', ['kata' => $kata]);
    }

    public function store(Request $request)
    {
        Kata::create($request->all());
        return redirect('/kata/create');
    }

    public function show(Kata $kata)
    {
        //
    }

    public function edit(Kata $katum)
    {
        return view('Kata.edit',  ['kata' => $katum]);
    }

    public function update(Request $request, Kata $kata, $id)
    {
        $data = $request->all();
        $kata = Kata::find($id);
        $kata->fill($data);

        $kata->save();
        return redirect('kata');
    }

    public function destroy(Kata $kata, $id)
    {
        $kata->destroy($id);
        return redirect('kata');
    }
}
