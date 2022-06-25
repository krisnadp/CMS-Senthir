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
