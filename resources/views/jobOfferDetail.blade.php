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
                <div class="col-md-6">Title: {{$offer->title}}</div>  
            </div>
            <div class="row">
                <div class="col-md-6">Description: {{$offer->description}}</div>
                <div class="col-md-6">Date: {{$offer->created_at}}</div>
            </div>
            <div class="row">
                    <div class="col-md-6">URL: {{$offer->url}}</div>
            </div>

        </div>
    </body>
</html>
