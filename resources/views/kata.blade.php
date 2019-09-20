<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
<table> <th> Lista de katas</th>
<tr>
    <th>Nombre de kata</th>
    <th>Descripción</th>
    <th>Usuario GitHub</th>
    <th>Repositorio GitHub</th>
</tr>
<?php
    foreach ($kataList as $kata) {
?>
<tr>
        <td><a href="/kata/{{$kata->id}}/edit">{{$kata->name}}</a> </td>
        <td>{{$kata->description}}</td>
        <td>{{$kata->username}}</td>
        <td>{{$kata->repository}}</td>
</tr>

<?php
    }
?>
 </table>  
</body>
</html>