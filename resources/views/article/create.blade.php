@extends('layouts.appDashboard')

@section('title', 'Create Article')

@section('titleHeading', 'Create an Article')

@section('content')

    <div class="container">

        <form action="{{ route('article.create') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="titleInput" class="form-label">Title</label>
                <input type="text" class="form-control" id="titleInput" name="title" placeholder="Example: New Phone from Xiaomy" required>
            </div>
            <div class="mb-3">
                <label for="categoryInput" class="form-label">Category</label>
                <select class="form-select" aria-label="Default select example" name="category_id">
                    <option selected>Open this select menu</option>
                    @foreach ($category as $categories)
                        <option value="{{ $categories->id }}">{{ $categories->name }}</option>
                    @endforeach
                  </select>
            </div>
            <div class="mb-3">
                <label for="detailInput" class="form-label">Detail Article</label>
                <textarea class="form-control" id="detailInput" rows="3" name="detail" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Add Article</button>

        </form>

    </div>

@endsection
