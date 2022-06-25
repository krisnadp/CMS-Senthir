@extends('layouts.appDashboard')

@section('title', 'Create Category')

@section('titleHeading', 'Create an Category')

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
                <form action="{{ route('category.create') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="addCategory" class="form-label">Category Name</label>
                        <input type="text" class="form-control" id="addCategory" name="name" placeholder="Example: News"
                            required>
                    </div>

                    <button type="submit" class="btn btn-primary">Add Category</button>

                </form>
            </div>
        </div>

    @else
        <script>
            window.location.href = '{{ route('login') }}';
        </script>

    @endguest

@endsection
