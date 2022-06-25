@extends('layouts.appDashboard')

@section('title', 'Create Article')

@section('titleHeading', 'Create an Article')

@section('content')

    <div class="container">

        <form action="/article/detail/{{ $article->id }}" method="POST">
            @csrf
            @method('patch')

            <div class="mb-3">
                <label for="titleInput" class="form-label">Title</label>
                <input type="text" class="form-control" id="titleInput" name="title" placeholder="Example: New Phone from Xiaomy" value="{{ $article->title }}" required>
            </div>
            <div class="mb-3">
                <label for="categoryInput" class="form-label">Category</label>
                <select class="form-select" aria-label="Default select example" name="category_id">
                    <option selected>Open this select menu</option>
                    @foreach ($category as $categories)
                        <option value="{{ $categories->id }}" @if ($article->category_id == $categories->id) selected @endif>
                            {{ $categories->name }}
                        </option>
                    @endforeach
                  </select>
            </div>
            <div class="mb-3">
                <label for="detailInput" class="form-label">Detail Article</label>
                <textarea class="form-control" id="detailInput" rows="3" name="detail" required>{{ $article->detail }}</textarea>
            </div>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Edit Article
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Article</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Are you sure want to edit this Article?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Edit Article</button>
                        </div>
                    </div>
                </div>
            </div>

        </form>

    </div>

@endsection
