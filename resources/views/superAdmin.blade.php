<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=Ç, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    
    <ol>
                    @foreach($ofertas as $oferta)
                    <li>
                        <ol class="colorOl">
                            <li>
                                titulo: {{$oferta->titulo}}
                            </li>
                            <li>
                                descripcion: {{$oferta->descripcion}}
                            </li>
                            <li>
                                URL: {{$oferta->url}}
                            </li>
                            <li>
                                <form action="/oferta-trabajo/{oferta_trabajo->id}" method="POST">
                                    @csrf
                                    @method('patch')

                                 <input type="checkbox" onclick="" name="validado" value="1" <?php if ($oferta->validado == 1) {echo "checked";}?>>
                                 <input type="submit" value="update">
                                </form>   
                            </li>
                            
                        </ol>
                    </li>
                    <br/>
                    <br/>
                    @endforeach
                </ol>
</body>
</html>