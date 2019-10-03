<?php
use App\GitHub;
$git= new GitHub;
?>
@extends('layouts.header')

@section('content')

<script>
    async function loadRepo() {
    const user = document.querySelector("#gituser").value ;
        try{
            const response = await fetch(`http://127.0.0.1:8000/api/kata/user/${user}`,{method:"GET"});
            const data =await response.json();
            printList(data);
            console.log(data);

        } catch (e) {
            console.log(e)
        }
    }

    function printList(array = []) {
        const repos = document.querySelector("#repository");
        array.forEach(repo=>{
            const option = document.createElement("option");
            option.value= repo.html_url;
            option.innerHTML= repo.full_name;
            repos.appendChild(option);
        })
    }
    </script>

<div>
    <h1 class="titulo">Subir Kata</h1>
    <h3 class="titulo">Completa todos los campos para subir tu Kata.</h3>
    @if ($errors->any())
        <p>Complete todos los campos</p>
    @endif
    <form id="create" class="formulario" action="/kata" method="POST" >
        @csrf
        <label class="campos">Name</label>
        <input class="campos" type="text" name="name" value="{{$kata->name}}" placeholder="Enter Kata name">
        <br>
        <label class="campos">Description</label>
        <input class="campos" type="text" name="description" value="{{$kata->description}}" placeholder="Short description">
        <br>
        <label class="campos">Github Username</label>
        <input class="campos" id="gituser"type="text" name="username" value="{{$kata->username}}">
        <button class="boton" type="button" onclick="loadRepo()">Buscar Repositorios</button>
        <br>
        <select form="create" class="campos" id="repository" name="repository">
        </select>
        <br>
        <div class="botones">
        <input class="boton" type="submit" value="Submit">
        <a href="/kata" type="submit" class="boton">Listado de Katas</a>
        </div>
    </form>
</div>

@endsection

{{--
    <main>
        <div>
            <h1>Subir kata</h1>
            <h2>Rellena estos campos para subir tu encuesta</h2>
        </div>
        <hr>
        <div>
            <p>Nombre de la kata</p>
            <input type="text" name="Nombre de la kata" id="Nombre de la kata">
            <hr>
            <p>Descripción</p>
            <input type="text" name="Descripción de la kata" id="Descripción de la kata">
            <p>Nombre del repositorio</p>
            <input type="text" name="Nombre del repositorio" id="Nombre del repositorio">
            <p>Usuario de GitHub</p>
            <input type="text" name="Usuario de GitHub" id="Usuario de GitHub">
        </div>
        <input type="button" value="Subir Kata">
    </main>
</body>
</html> --}}
