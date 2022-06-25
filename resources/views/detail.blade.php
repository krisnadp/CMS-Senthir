@extends('layouts.app')

@section('title', $article->title)

@section('content')

    <div class="container mt-5">

        <h1 class="fw-bold">{{ $article->title }}</h1>
        <small>{{ $article->categories->name }}, {{ $article->created_at->format('D, d M Y, H:i:s') }}</small>
        <p class="mt-4">
            {{ $article->detail }}
        </p>
        
    </div>

@endsection
