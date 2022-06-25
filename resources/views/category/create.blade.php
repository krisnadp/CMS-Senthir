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

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Add Category
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure want to add this Category?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Add Category</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    @else
        <script>
            window.location.href = '{{ route('login') }}';
        </script>

    @endguest

@endsection
