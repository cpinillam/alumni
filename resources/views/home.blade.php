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

                    Now you can update your profile to meet other Coders! Click to start!<br>
                    <a href="/experience/create" id="editButton" >Complete profile</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection