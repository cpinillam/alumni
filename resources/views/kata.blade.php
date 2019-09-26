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
                    <td><a href="/kata/{{$kata->id}}/edit">{{$kata->name}}</a> </td>
                    <td>{{$kata->description}}</td>
                    <td>{{$kata->username}}</td>
                    <td>{{$kata->repository}}</td>
                    <td> <input type="button" value="Edit" formaction=""> </td>
                    <td>
                        <form action="/kata/{{$kata->id}}" method="post">
                            @method('DELETE')
                            @csrf
                        <button class="btn btn-default" type="submit">Delete</button>
                    </form></td>
                </tr>
            @endforeach
        </table>
        <div class="row justify-content-center">
            <a href="/kata/create" class="boton">Crear Nueva Kata</a>
        </div>
    </div>

@endsection
    