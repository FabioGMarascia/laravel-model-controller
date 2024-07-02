@extends('layouts.app')

@section('title', 'MOVIES INFO')

@section('content')
    <h1 class="display-3 fw-bold text-center text-danger">MOVIES</h1>

    <div class="row mx-0 justify-content-center">
        <div class="col-8 px-0 rounded">

            <table class="table table-striped border border-5 border-black fw-bold">
                <thead>
                    <tr>
                        <th scope="col" class="text-danger">#</th>
                        <th scope="col" class="text-danger">TITLE</th>
                        <th scope="col" class="text-danger">ORIGINAL TITLE</th>
                        <th scope="col" class="text-danger">NATIONALITY</th>
                        <th scope="col" class="text-danger">DATE</th>
                        <th scope="col" class="text-danger">VOTE</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($movies as $key => $movie)
                        <tr>
                            <th scope="row">{{ $key }}</th>
                            <td>{{ $movie->title }}</td>
                            <td>{{ $movie->original_title }}</td>
                            <td>{{ $movie->nationality }}</td>
                            <td>{{ $movie->date }}</td>
                            <td>{{ $movie->vote }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
