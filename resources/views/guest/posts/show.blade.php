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
                <p>Categories:
                    @if ($post->category)
                        <a href="{{ route('categories.show', ['category' => $post->category->id]) }}">
                            {{ $post->category->name }}
                        </a>
                    @else
                        -
                    @endif
                </p>
                <div class="tags-class">
                    <h1>Tags:</h1>
                    @foreach ($post->tags as $tag)
                        <a class="block" href="#">#{{ $tag->name }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
