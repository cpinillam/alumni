<?php

namespace App\Http\Controllers;

use App\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    
    public function index()
    {
        $empresa = Empresa::all();
        return view('empresa', ['empresas' => $empresa]);
    }

    public function create()
    {
        $empresa = new Empresa();
        return view('empresa.create', ['empresa' => $empresa]);
    }

    public function store(Request $request)
    {
        Empresa::create($request->all());
        return redirect('/empresa/create');
    }

    public function show(Empresa $empresa)
    {
        $empresa = Empresa::find($empresa->id);
        return view ('empresa.show',['empresa' => $empresa]);
    }
   
    public function edit(Empresa $empresa)
    {
        return view('empresa.edit',  ['empresa' => $empresa]);
    }

    public function update(Request $request, Empresa $empresa)
    {
        $data = $request->all();
        $empresa = Empresa::find($empresa->id);
        $empresa->fill($data);
        $empresa->save();
        return redirect ('empresa');
    }
    
    public function destroy(Empresa $empresa)
    {
        $empresa->destroy($empresa->id);
        return redirect('empresa');
    }
}
