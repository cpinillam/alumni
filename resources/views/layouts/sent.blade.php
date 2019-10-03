@extends('layouts.header')

@section('content')
        <div id=confirmacionEnvio>
            <h1>Enviado</h1>
            <br>
            <h2>¡Gracias por enviar tu kata!</h2>
        </div>
        <div id=datosDeLaKataEnviada>
            <br>
            <p>Nombre de la kata: {{$kata->name}}</p>
            <br>
            <p>Descripción: {{$kata->description}}</p>
            <br>
            <p>Nombre del repositorio: {{$kata->repository}}</p>
            <br>
            <p>Usuario GitHub: {{$kata->username}}</p>
        </div>
        <br>
            <a href="/kata" class="boton">Listado de Katas</a>
@endsection