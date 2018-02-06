@extends('layouts.app')

@section('content')
    <div class="row">
        @foreach( $posts as $post )
            <h1>{{ $post->title }}</h1>
            <p>{{ $post->body }}</p>
            <br>
        @endforeach
    </div>
@endsection