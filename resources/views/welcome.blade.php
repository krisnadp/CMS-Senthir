@extends('layouts.app')

@section('title', 'CMS')

@section('content')

    <div class="container mt-5">

        {{-- Jumbotron --}}
        <div class="row">
            <div class="col-md-7">
                <h1 class="fw-bold">
                    Content Management
                    <br>
                    System
                </h1>
                <p class="mt-1 text-muted">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti a dicta qui.
                    Odit ex provident molestiae ducimus, nulla ullam modi quaerat a, maxime nisi cupiditate placeat
                    laboriosam? Sed, cum qui!</p>
            </div>
            <div class="col-md-5">
                <div class="container py-5"></div>
                <div class="container py-3"></div>
                <h4 class="align-text-bottom text-end fw-bold">
                    Lorem Ipsum
                </h4>
            </div>
        </div>
        {{-- End of Jumbotron --}}

    </div>

    {{-- Content --}}
    <div class="container py-5">

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero quidem asperiores officia sapiente et dignissimos
            maiores eaque atque distinctio eos magnam sed molestiae fugit possimus voluptates aperiam consectetur, autem
            accusantium.</p>

        <div class="row row-cols-1 row-cols-md-3 g-4">

            @foreach ($article as $articles)

            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $articles->title }}</h5>
                        <p class="card-text">{{ \Illuminate\Support\Str::limit($articles->detail, 100) }}</p>
                        <hr>
                        <small>{{ $articles->created_at->format('D, d M Y, H:i:s') }}</small>
                        <hr>
                        <a class="btn btn-primary float-right" href="detail/{{ $articles->id }}">Details</a>
                    </div>
                </div>
            </div>
            
            @endforeach

        </div>

    </div>
    {{-- End of Content --}}

@endsection
