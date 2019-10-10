<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Administrador</title>
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 border text-center">
                <h1 class="text-primary ">Administrador</h1>
            </div>
        </div>
   
    <ol>
                    @foreach($jobOffers as $offer)
                   
                    
                    <li>
                        <ol class="colorOl">
                            <li>
                                title: {{$offer->title}}
                            </li>
                            <li>
                                description: {{$offer->description}}
                            </li>
                            <li>
                                URL: {{$offer->url}}
                            </li>
                            <li>
                              {{--   <form action="/joboffers/{{$offer->id}}" method="POST"> --}}
                                <form action="/validate/{{$offer->id}}" method="POST">  
                                    @csrf
                                   {{--  @method('PUT') --}}

                                    @if(!$offer->validate)
                                        <button type="submit" class="btn btn-primary" name="validating" value="1">VALIDAR->1</button>
                                    @endif
                                    @if($offer->validate)
                                    <button type="submit" class="btn btn-warning" name="validating" value="0">NO VALIDAR->0</button>
                                    @endif
                                 
                                </form>   
                            </li>
                            <li>
                                    <form method="POST" action="{{route('joboffers.destroy',$offer->id)}}">
                                    @csrf
                                    @method('delete')

                                    <input type="submit" class="btn btn-danger"value="borrar">

                                </form>
                            </li>
                            
                        </ol>
                    </li>
                    <br/>
                    <br/>
                    @endforeach
                </ol>
            </div>
</body>
</html>