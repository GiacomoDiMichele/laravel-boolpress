@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="category-id">

            </div>
            <div class="category-description">
                <h1>{{ $category->name }}</h1>
            </div>
        </div>
    </div>
@endsection
