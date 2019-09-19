<?php

namespace App\Http\Controllers;

use App\OfertasTrabajo;
use Illuminate\Http\Request;

class OfertasTrabajoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $ofertaTrabajo = OfertasTrabajo::all();

        return view('ofertastrabajo',['ofertastrabajo'=>$ofertaTrabajo]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       /*  return view('formularioOfertaTrabajo'); */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        
        /* return redirect('ofertas-trabajo'); */
       
      
       
    $data = $request->validate([
            'titulo'=> 'required',
            'descripcion'=> 'required',
            'url'=> 'required'

        ]); 

       

      $oferta = new OfertasTrabajo();
        $oferta->titulo = $request->titulo;
        $oferta->descripcion = $request->descripcion;
        $oferta->url = $request->url;
        

        $oferta->save();
       

        return redirect('ofertas-trabajo'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OfertasTrabajo  $ofertasTrabajo
     * @return \Illuminate\Http\Response
     */
    public function show(OfertasTrabajo $ofertasTrabajo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OfertasTrabajo  $ofertasTrabajo
     * @return \Illuminate\Http\Response
     */
    public function edit(OfertasTrabajo $ofertasTrabajo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OfertasTrabajo  $ofertasTrabajo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OfertasTrabajo $ofertasTrabajo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OfertasTrabajo  $ofertasTrabajo
     * @return \Illuminate\Http\Response
     */
    public function destroy(OfertasTrabajo $ofertasTrabajo)
    {
        //
    }
}
