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
                
                <table class="table">
                    <thead>
                        <th>#</th>
                        <th>Category Name</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($category as $categories)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $categories->name }}</td>
                                <td>
                                    <a class="btn btn-warning" href="/category/detail/{{ $categories->id }}">Edit</a>
                                    <form action="/category/detail/{{ $categories->id }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('delete')
                                        
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            Delete
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Delete Article</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure want to delete this Category?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-danger">Delete Category</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>

    @else
        <script>
            window.location.href = '{{ route('login') }}';
        </script>

    @endguest

@endsection
