<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

        <div class="flex-center position-ref full-height card">
       
            <ol>
                @foreach($joboffer as $offer)
                
                <li>
                    <ol class="colorOl">
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
                                <input type="submit" value="Want more Detail, useless ? Click it then">
                            </form>
                        </li>
                    </ol>
                </li>
                
                @endforeach
                <li><br><a href="/new-job-offer">+ Create new Job Offer +</a>
                </li>
            </ol>
            
            <form action="/search" method="POST">
                {{ csrf_field() }}
                    @csrf
                    <input type="text" name="query" />
                    <input type="submit" class="btn btn-sm btn-primary" value="Search" />
                </form>
        </div>
 
    </body>
</html>
