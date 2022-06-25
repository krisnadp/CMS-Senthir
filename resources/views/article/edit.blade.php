@extends('layouts.appDashboard')

@section('title', 'Edit Article')

@section('titleHeading', 'Edit an Article')

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
                        <th>Title</th>
                        <th>Category</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($article as $articles)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $articles->title }}</td>
                                <td>{{ $articles->categories->name }}</td>
                                <td>{{ $articles->created_at->format('D, d M Y, H:i:s') }}</td>
                                <td>
                                    <a class="btn btn-warning" href="/article/detail/{{ $articles->id }}">Edit</a>
                                    <form action="/article/detail/{{ $articles->id }}" method="POST" class="d-inline">
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
                                                        Are you sure want to delete this Article?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-danger">Delete Article</button>
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
