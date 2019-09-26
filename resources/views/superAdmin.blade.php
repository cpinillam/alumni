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
                    @foreach($joboffer as $offer)
                   
                    
                    <li>
                        <ol class="colorOl">
                            <li>
                                titulo: {{$offer->title}}
                            </li>
                            <li>
                                descripcion: {{$offer->description}}
                            </li>
                            <li>
                                URLs: {{$offer->url}}
                            </li>
                            <li>
                                <form action="/joboffers/{{$offer->id}}" method="POST">
                                    
                                    @csrf
                                    @method('PUT')
                                    
                                    @if(!$offer->validate)
                                        <button type="submit" name="validate" value="1">VALIDADO->1</button>
                                    @endif
                                    @if($offer->validate)
                                    <button type="submit" name="validate" value="0">NO VALIDAR->0</button>
                                    @endif
                                 
                                </form>   
                            </li>
                            <li>
                                    <form method="POST" action="{{route('joboffers.destroy',$offer->id)}}">
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