<!doctype html>
<html lang="en">

<head>
    <title>{!! $question->title !!}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="card-group">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{!! $question->title !!}</h4>
                            <p class="card-text">{!! $question->body !!}</p>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                @foreach ($answers as $answer)
                                @if($answer->answer_post_id==$question->post_id)
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <p class="mb-1">{!! $answer->body !!}</p>
                                    </li>
                                    @endif
                                    @endforeach
                            </div>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" data-src="holder.js/100x180/?text=Image cap" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Post an Answer</h4>
                            <p class="card-text">@include('faq.createAnswer ', ["question"=>$question])</p>
                        </div>

                    </div>
                    <!-- Optional JavaScript -->
                    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                        crossorigin="anonymous">
                    </script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
                        crossorigin="anonymous">
                    </script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
                        crossorigin="anonymous">
                    </script>
</body>

</html>