@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="">
                <h1>Tutti i post</h1>
                <ul>
                    @foreach ($posts as $post)
                        <li>{{ $post->id }}</li>
                        <li>{{ $post->description }}</li>
                        <li>{{ $post->publication_date }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
