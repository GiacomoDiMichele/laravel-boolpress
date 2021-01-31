@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="category-id">

            </div>
            <div class="category-description">
                <h1>Categoria: {{ $category->name }}</h1>
                <ul>
                    @foreach ($category->posts as $post)
                        <a class="block" href="{{ route('posts.show', ['post' => $post->id]) }}">
                            - {{ $post->title }}
                        </a>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
