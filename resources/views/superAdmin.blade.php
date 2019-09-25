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
                                    
                                    @if(!$oferta->validado)
                                        <button type="submit" name="validado" value="1">VALIDADO->1</button>
                                    @endif
                                    @if($oferta->validado)
                                    <button type="submit" name="validado" value="0">NO VALIDAR->0</button>
                                    @endif
                                 
                                </form>   
                            </li>
                            <li>
                                    <form method="POST" action="{{route('ofertastrabajo.destroy',$oferta->id)}}">
                                    @csrf
                                    @method('delete')

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