@extends('layouts.header')

@section('content')
    <div>
        <h1>Lista de katas</h1>
        <table> 
            <tr>
                <th>Nombre de kata</th>
                <th>Descripción</th>
                <th>Usuario GitHub</th>
                <th>Repositorio GitHub</th>
            </tr>
            @foreach ($katas as $kata)
                <tr>
                    {{ csrf_field() }}
                    <td>{{$kata->name}}</td>
                    <td>{{$kata->description}}</td>
                    <td>{{$kata->username}}</td>
                    <td>{{$kata->repository}}</td>
                    <td> <button href="/kata/{{$kata->id}}/edit" class="botonLista" type="button" value="Edit" >Edit</button>
                    <td>
                        <form action="/kata/{{$kata->id}}" method="post">
                            @csrf
                            @method('DELETE')
                        <button class="botonLista" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <div class="botonCrear">
            <button href="/kata/create" class="boton">Crear Nueva Kata</button>
        </div>
    </div>

@endsection
    