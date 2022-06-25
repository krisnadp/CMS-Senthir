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
                                    <form action="/article/detail/{{ $articles->id }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger">Delete</button>
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
