<?php

namespace App\Http\Controllers;

use App\OfertasTrabajo;
use Illuminate\Http\Request;

class OfertasTrabajoController extends Controller
{
   
    public function index()
    {
        
        $ofertasTrabajo = OfertasTrabajo::all();
        

       //To Do politica acceso Laravel 
       $coder=false;
         if(!$coder){            
             return view('superAdmin',['ofertas'=>$ofertasTrabajo]);
         }        
        return view('ofertastrabajo',['ofertas'=>$ofertasTrabajo]);



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
       

        return redirect('oferta-trabajo'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OfertasTrabajo  $ofertasTrabajo
     * @return \Illuminate\Http\Response
     */
    public function show(OfertasTrabajo $ofertasTrabajo)
    {
        
        $ofertas = OfertasTrabajo::find($id);
        return view('oferta-detail', ['oferta'=>$ofertas]);
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
    public function update(Request $request, OfertasTrabajo $ofertasTrabajo,$id)
    {
       // dd($request->validado);
       //To Do
        $notaActualizar = OfertasTrabajo::find($id);
        $notaActualizar->validado = $request->validado; 
        $notaActualizar->save();
        return redirect('oferta-trabajo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OfertasTrabajo  $ofertasTrabajo
     * @return \Illuminate\Http\Response
     */
    public function destroy(OfertasTrabajo $ofertastrabajo)
    {   
        $ofertastrabajo->delete(); 
        return redirect(route('ofertastrabajo.index'));
    }
}
