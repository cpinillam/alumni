<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
<form action='/kata/{{$kata->id}}' method="POST">
    @csrf
    @method ('PUT')
    <table>
        <th> Kata a editar</th>
        <tr>
            <th>Nombre de kata</th>
            <th>Descripción</th>
            <th>Usuario GitHub</th>
            <th>Repositorio GitHub</th>
        </tr>
        <tr>
                <td>
                    <input type="text" name="" id="" value="{{$kata->name}}">
                </td>
                <td>
                    <input type="text" name="" id="" value="{{$kata->description}}">
                </td>
                <td>
                    <input type="text" name="" id="" value="{{$kata->username}}">
                </td>
                <td>
                    <input type="text" name="" id="" value="{{$kata->repository}}">
                </td>
            </tr>
    </table>
        <input type=submit value="Actualizar">
    </form>


</body>

</html>
