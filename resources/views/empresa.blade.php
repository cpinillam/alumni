@extends('layouts.header')

@section('content')
    <div>
        <h1>Listado de empresas</h1>
        <table> 
            <tr>
                <th>Nombre</th>
                <th>Oficinas centrales</th>
                <th>Ubicación (iframe)</th>
                <th>Valoración</th>
            </tr>
            @foreach ($empresas as $empresa)
                <tr> 
                    {{ csrf_field() }}
                    <td>{{$empresa->name}}</td>
                    <td>{{$empresa->headquarters}}</td>
                    <td>{{$empresa->url_iframe}}</td>
                    <td>{{$empresa->rating}}</td>
                    <td>
                        <form method="GET" action="/empresa/{{$empresa->id}}/edit">
                            <input class="botonLista" type="submit" value="Editar">
                        </form> 
                    </td>
                    <td>
                        <form action="/empresa/{{$empresa->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                        <button class="botonLista" type="submit">Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        
        <div class="botonCrear">
                <br>
            <a href="/empresa/create" class="boton">Crear Empresa</a>
        </div>
    </div>

@endsection
    