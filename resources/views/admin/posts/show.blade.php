@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="post-id">
                <h1>Post n. {{ $post->id }}</h1>
            </div>
            <div class="post-description">
                <h1>{{ $post->title }}</h1>
                <p>{{ $post->description }}</p>
                <p>{{ $post->publication_date }}</p>
                <p>{{ $post->category ? $post->category->name : '-' }}</p>
            </div>
        </div>
    </div>
@endsection
