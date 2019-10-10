<!doctype html>
<html lang="en">

<head>
    <title>Post</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
            <p>{{ $message }}</p>
        </div>
        @endif
        <div class="form-group">
            <label for="">Post Your Answer</label>
            <form action="/createanswer" method="post">
                @csrf
                <input name="post_id" value="{{$question->post_id}}" hidden="true">
                <input type="text" name="body" placeholder="Post your Answer here">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </form>

            {{-- @include('partials.footer') --}}