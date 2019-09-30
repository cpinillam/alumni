@extends('layouts.header')

@section('content')
    <h1 class="titulo">Editar</h1>
    @if ($errors->any())
        <p>Complete todos los campos</p>
    @endif
<div>
        <form class='formulario' action='/kata/{{$kata->id}}' method='POST' >
            @csrf
            @method ('PATCH')
            {{ csrf_field() }}
            <label>Nombre de la kata</label>
            <input class="campos" type="text" name="name" value="{{$kata->name}}">
            <br>
            <label>Descripción de la kata</label>
            <input class="campos" type="text" name="description" value="{{$kata->description}}">
            <br>
            <label>Usuario de Github</label>
            <input class="campos" type="text" name="username" value="{{$kata->username}}">
            <br>
            <select class="campos" name="repository" >
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
            </select>
            <br> 
            <input type="submit" class="boton" value="Enviar y Confirmar">
             {{-- <a href="/kataSend/{{$kata->id}}" type="submit" class="boton">Enviar</a> --}}
             <br>
            <a href="/kata" class="boton">Listado de Katas</a>
        </form>
    </div>

    @endsection