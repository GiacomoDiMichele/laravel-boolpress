@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <h1>Tutti i posts</h1>
                <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">
                    Crea nuovo post
                </a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Descrizione</th>
                        <th>Data pubblicazione</th>
                        <th class="text-center">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->description }}</td>
                            <td>{{ $post->publication_date }}</td>
                            <td><a class="btn btn-info" href="{{ route('posts.show', ['post' => $post->id]) }}">Visualizza</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
