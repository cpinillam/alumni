<?php
use App\GitHub;
$git= new GitHub;
?>
@extends('layouts.header')

@section('content')

<script>
    function loadRepo() {
    
      var xhr = new XMLHttpRequest();
      xhr.open ('GET',"http://localhost:8000/kata/create");
      xhr.send();
      dd (xhr);
      xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("gituser").innerHTML = this.responseText;
        }
      };
    $git=getUserRepositories(this.responseText);
    }
    </script>
    
<div>
    <h1 class="titulo">Subir Kata</h1>
    <h3 class="titulo">Completa todos los campos para subir tu Kata.</h3>
    @if ($errors->any())
        <p>Complete todos los campos</p>
    @endif
    <form class="formulario" action="/kata" method="POST" >
        @csrf
        <label class="campos">Name</label>
        <input class="campos" type="text" name="name" value="{{$kata->name}}" placeholder="Enter Kata name">
        <br>
        <label class="campos">Description</label>
        <input class="campos" type="text" name="description" value="{{$kata->description}}" placeholder="Short description">
        <br>
        <label class="campos">Github Username</label>
        <input class="campos" id="gituser"type="text" name="username" value="{{$kata->username}}" placeholder="Enter your Github username">
        <button class="boton" type="button" onclick="loadRepo()">Buscar Repositorios</button> 
        <br>
        <select class="campos" name="repository" placeholder="Choose your repository">
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
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