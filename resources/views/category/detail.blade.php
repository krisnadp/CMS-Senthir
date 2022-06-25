@extends('layouts.appDashboard')

@section('title', 'Edit Category')

@section('titleHeading', 'Edit an Category')

@section('content')

    @guest

        @if (Route::has('login'))
            <script>
                window.location.href = '{{ route('login') }}';
            </script>
        @endif
    @elseif (Auth::user()->role == 0)
        <div class="container">
            <div class="container">
                <form action="/category/detail/{{ $category->id }}" method="POST">
                    @csrf
                    @method('patch')

                    <div class="mb-3">
                        <label for="addCategory" class="form-label">Category Name</label>
                        <input type="text" class="form-control" id="addCategory" name="name"
                        value="{{ $category->name }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Edit Category</button>

                </form>
            </div>
        </div>
    @else
        <script>
            window.location.href = '{{ route('login') }}';
        </script>

    @endguest

@endsection
