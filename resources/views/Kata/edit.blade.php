<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table>
        <th> Kata a editar</th>
        <tr>
            <th>Nombre de kata</th>
            <th>Descripción</th>
            <th>Usuario GitHub</th>
            <th>Repositorio GitHub</th>
        </tr>
        <?php
        foreach ($kata as $value) {
            ?>
            <tr>
                <td>
                    <input type="text" name="" id="" value="<?php echo $value->name ?>">
                </td>
                <td>
                    <input type="text" name="" id="" value="<?php echo $value->description ?>">
                </td>
                <td>
                    <input type="text" name="" id="" value="<?php echo $value->username ?>">
                </td>
                <td>
                    <input type="text" name="" id="" value="<?php echo $value->repository ?>">
                </td>

            </tr>

        <?php
        }
        ?>
    </table>
    <input type=submit value="Actualizar"> 

</body>

</html>