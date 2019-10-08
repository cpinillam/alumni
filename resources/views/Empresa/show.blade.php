@extends('layouts.header')

@section('content')

<div id="container">
    <h1 class="titulo">{{$empresa->name}}</h1>
    <div class="ubicacion">
            <div class="oficina">
                    <div class> 
                        <img class="foto1" src="{{$empresa->url_pic_hq}}">
                    </div>
                </div>
        <div class="iframe">
            <iframe
                src="{{$empresa->url_iframe}}">
            </iframe>
        </div>
    </div>
    <div class="titulo">Oficina: {{$empresa->headquarters}}</div>
    <div class="titulo">Valoración: {{$empresa->rating}}</div>
    <div class="titulo">Opiniones: {{$empresa->review}}</div>
    <div class="titulo">Sueldo anual: {{$empresa->anual_salary}}</div>
    <div class="titulo">Oferta de trabajo nr.: {{$empresa->job_offer_id}}</div>
</div>
<form method="GET" action="/empresa/{{$empresa->id}}/edit">
    <input class="botonLista" type="submit" value="Editar">
</form> 
@endsection