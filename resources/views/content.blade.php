<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('layouts.global')

    @section('content')
        <div class="offer">
                <form action="{{route('joboffers.index')}}" method="get">
                        @csrf
                        <button type="submit" class="btn btn-outline-info">Here's job offers</button>
                    </form>
        </div>
        <div class="project">
                <form action="{{route('personalsprojects.index')}}" method="get">
                        @csrf
                        <button type="submit" class="btn btn-outline-info">Here's personal projects</button>
                    </form>
        </div>
    @endsection
        
</body>
</html>