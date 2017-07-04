@extends('layouts.nav')

@section('content')
<div class="jumbotron" style="padding-bottom: 10px; margin-bottom: 0;">
    <div class="container">
            <div class="row">
            <div class="col-md-offset-4 col-md-4">
                <h1>Welkom op het Tirum</h1>
                <p>Dit is een forum gemaakt voor school.</p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    @foreach($posts as $post)
    <div class="row">
        <hr style="margin-bottom: 5px">
        <div class="col-md-offset-2 col-md-6">
            <h2 style="margin-top: 10px;">{{ $post->title }}</h2>
            <p>{{ $post->descriptie }}</p>
        </div>
        <div class="col-md-2">
            <p style="margin-top: 25px;"><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
    </div>
    @endforeach

    <hr style="margin-bottom: 10px; margin-top: 10px;">

    <footer class="col-md-offset-2">
        <p>&copy; Timo de Jong</p>
    </footer>
</div>
@stop
@section('scripts')
    @stop
