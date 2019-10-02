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

    </div>
    <div class="form-group">
        <label for=""> ASK YOUR QUESTION</label>
        <form action="questions" method="POST">
            @csrf
            <small id="helpId" class="text-muted">Be specific and imagine you’re asking a question to another
                developer</small>
            <input type="text" name="title" placeholder="title">
            <small id="helpId" class="text-muted">Include all the information someone would need to answer your
                question</small>
            <input type="text" name="body" placeholder="body">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

</body>

</html>