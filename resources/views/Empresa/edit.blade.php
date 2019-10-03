@extends('layouts.header')

@section('content')
<h1 class="titulo">Editar Empresa</h1>
@if ($errors->any())
<p>Complete todos los campos</p>
@endif

<div>
    <form id="edit" class='formulario' action='/empresa/{{$empresa->id}}' method='POST'>
        @csrf
        @method ('PATCH')
        {{ csrf_field() }}
        <label>Empresa</label>
        <input class="campos" type="text" name="name" value="{{$empresa->name}}">
        <label>Oficinas centrales</label>
        <input class="campos" type="text" name="headquarters" value="{{$empresa->headquarters}}">
        <label>iframe ubicación</label>
        <input class="campos" id="url_iframe" type="text" name="url_iframe" value="{{$empresa->url_iframe}}">
        <label>url foto</label>
        <input class="campos" id="url_pic_hq" type="text" name="url_pic_hq" value="{{$empresa->url_pic_hq}}">
        <label>Valoración</label>
        <input class="campos" id="rating" type="text" name="rating" value="{{$empresa->rating}}">
        <label>Opiniones</label>
        <input class="campos" id="review" type="text" name="review" value="{{$empresa->review}}">
        <label>Sueldo</label>
        <input class="campos" id="anual_salary" type="text" name="anual_salary" value="{{$empresa->anual_salary}}">
        <label>Id Oferta</label>
        <input class="campos" id="job_offer_id" type="text" name="job_offer_id" value="{{$empresa->job_offer_id}}">
        <input type="submit" class="boton" value="Enviar y Confirmar">
        <br>
        <a href="/empresa" class="boton">Listado de Empresas</a>
    </form>
</div>

@endsection