<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                                <form action="/oferta-trabajo/{{$oferta->id}}" method="POST">
                                    @csrf
                                    @method('PUT')

                                 
                                 <input type="submit" value="validar">
                                </form>   
                            </li>
                            <li>
                                    <form method="POST" action="/oferta-trabajo/{{$oferta->id}}">
                                    @csrf
                                    @method('DELETE')

                                    <input type="submit" value="borrar">

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