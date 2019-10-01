<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
        <div class=".container-fluid">
            <div class="row">
                    <div class="card-header"><b>{{$searchResults->count()}} results found for "{{request('query') }}"</b></div>
                    <div class="card-body">
                        @foreach ($searchResults as $searchResult)
                            <ul>
                                <li><a href="{{$searchResult->url}}">{{$searchResult->title}}</a></li>
                            </ul>
                        @endforeach
                    </div>
            </div>
        </div>
    </body>
</html>
