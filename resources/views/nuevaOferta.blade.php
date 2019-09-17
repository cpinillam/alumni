<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">                                       
</head>

<body>
    <div class="flex-center position-ref full-height card">
       
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
                        </ol>
                    </li>
                    <br/>
                    <br/>
                    @endforeach
                </ol>
        
    </div>
</body>

</html>