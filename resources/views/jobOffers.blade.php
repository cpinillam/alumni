<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    </head>
    <body>

        <div class="container-fluid">
            
       
            <ol>
                @foreach($joboffer as $offer)
                
                <li>
                    <ol>
                        <li>
                            Title: {{$offer->title}}
                        </li>
                        <li>
                            Description: {{$offer->description}}
                        </li>
                        <li>
                            URL: {{$offer->url}}
                        </li>
                        <li>
                            Detail: <form action="{{route('joboffers.show',$offer->id)}}" method="get">
                                @csrf
                                <button type="submit" class="btn btn-outline-info">More detail</button>
                            </form>
                        </li>
                    </ol>
                </li>
                
                @endforeach
                </li>
            </ol>
            <li><br><a href="/new-job-offer">+ Create new Job Offer +</a>
            
            <form action="/search" method="POST">
                {{ csrf_field() }}
                    @csrf
                    <input type="text" name="query" />
                    <input type="submit" class="btn btn-sm btn-primary" value="Search"/>
                </form>

    </div>
 
    </body>
</html>
