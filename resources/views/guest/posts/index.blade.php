@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="">
                <h1>Tutti i post</h1>
                <ul>
                    @foreach ($posts as $post)
                        <li>
                            <span>{{ $post->id }}</span>
                            <a href="{{ route('posts.show', ['post' => $post->id]) }}">{{ $post->title }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
