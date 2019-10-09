<?php
use App\GitHub;
$git= new GitHub;
?>

@extends('layouts.header')

@section('content')
<h1 class="titulo">Editar</h1>
@if ($errors->any())
<p>Complete todos los campos</p>
@endif

<script>
    async function loadRepo() {
        const user = document.querySelector("#gituser").value;
        try {
            const response = await fetch(`http://127.0.0.1:8000/api/kata/user/${user}`, { method: "GET" });
            const data = await response.json();
            printList(data);
            //console.log(data);
        } catch (e) {
            console.log(e)
        }
    }

    function printList(array = []) {
        const repos = document.querySelector("#repository");
        array.forEach(repo => {
            const option = document.createElement("option");
            option.value = repo.html_url;
            option.innerHTML = repo.full_name;
            repos.appendChild(option);
        })
    }
</script>

<div>
    <form id="edit" class='formulario' action='/kata/{{$kata->id}}' method='POST'>
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
        <input class="campos" id="gituser" type="text" name="username" value="{{$kata->username}}">
        <button class="boton" type="button" onclick="loadRepo()">Buscar Repositorios</button>
        <br>
        <label>Repositorio de Github</label>
        <select form="edit" class="campos" id="repository" name="repository">
        </select>
        <br>
        <input type="submit" class="boton" value="Enviar y Confirmar">
        <br>
        <a href="/kata" class="boton">Listado de Katas</a>
    </form>
</div>

@endsection