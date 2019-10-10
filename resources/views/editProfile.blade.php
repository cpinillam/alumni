@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">Welcome Coder!!</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form method="POST" action="/experience/{{$experience->id}}">
                        @csrf
                        <label>Teléfono</label>
                        <input type="text" id="phone" value="{{$experience->phone}}">
                        <label>Tu pagina web</label>
                        <input type="text" id="webPage" value="{{$experience->webPage}}">
                        <label>Tu GitHub</label>
                        <input type="text" id="gitHub" value="{{$experience->github}}">
                        <label>Tu Codepen</label>
                        <input type="text" id="codePen" value="{{$experience->codepen}}">
                        <label>Tu Linkedin</label>
                        <input type="text" id="linkedin" value="{{$experience->linkedln}}">
                        <label>Tu ciudad</label>
                        <input type="text" id="location" value="{{$experience->location}}">
                        <label>Describenos tu último trabajo</label>
                        <input type="text" id="location" value="{{$experience->title}}">
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection