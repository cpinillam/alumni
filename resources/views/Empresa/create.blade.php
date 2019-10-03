@extends('layouts.header')

@section('content')

<div>
    <h1 class="titulo">Company upload</h1>
    @if ($errors->any())
        <p>Please complete all data fields</p>
    @endif
    <form id="create" class="formulario" action="/empresa" method="POST" >
        @csrf
        <br>
        <label class="campos">Company Name</label>
        <input class="campos" type="text" name="name" value="{{$empresa->name}}" placeholder="Enter company name">
        <label class="campos">Headquarters city</label>
        <input class="campos" type="text" name="headquarters" value="{{$empresa->headquarters}}" placeholder="Enter company city">
        <label class="campos">Location iframe</label>
        <input class="campos" type="text" name="url_iframe" value="{{$empresa->url_iframe}}">
        <label class="campos">Picture url</label>
        <input class="campos" type="text" name="url_pic_hq" value="{{$empresa->url_pic_hq}}">
        <label class="campos">Rating (value from 1 to 5)</label>
        <input class="campos" type="text" name="rating" value="{{$empresa->rating}}">
        <label class="campos">Review</label>
        <input class="campos" type="text" name="review" value="{{$empresa->review}}">
        <label class="campos">Anual salary</label>
        <input class="campos" type="text" name="anual_salary" value="{{$empresa->anual_salary}}">
        <label class="campos">Job offer id</label>
        <input class="campos" type="text" name="job_offer_id" value="{{$empresa->job_offer_id}}">
        <div class="botones">
        <input class="boton" type="submit" value="Submit">
        <a href="/empresa" type="submit" class="boton">Companies List</a>
        </div>
    </form>
</div>

@endsection

