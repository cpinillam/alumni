<?php

namespace App\Http\Controllers;

use App\OfertasTrabajo;
use Illuminate\Http\Request;

class OfertasTrabajoController extends Controller
{
   
    public function index()
    {
        
        $ofertaTrabajo = OfertasTrabajo::all();

       //To Do politica acceso Laravel 
       $coder=false;
         if($coder){            
             return view('superAdmin',['ofertas'=>$ofertaTrabajo]);
         }        
        return view('nuevaOferta',['ofertas'=>$ofertaTrabajo]);



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
        
        $ofertasTrabajo->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OfertasTrabajo  $ofertasTrabajo
     * @return \Illuminate\Http\Response
     */
    public function destroy(OfertasTrabajo $ofertasTrabajo,$id)
    {   
        $ofertaTrabajos = OfertasTrabajo::destroy($id);
        /* To Do 
        dd($ofertasTrabajo);
        $ofertasTrabajo->delete(); */
        return redirect('oferta-trabajo');
    }
}
