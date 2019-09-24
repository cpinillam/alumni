
    <div>
        <table> 
            <th> <h2>Lista de katas</h2></th>
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
                </tr>
            @endforeach
        </table>
        <div class="row justify-content-center">
            <a href="/kata/create" class="btn btn-primary ml-auto">Crear Nueva Kata</a>
        </div>
    </div>
