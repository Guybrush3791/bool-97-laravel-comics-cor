@extends("layouts.main-layout")

@section("content")

    <h1>Best movies</h1>
    <ul>
        @foreach ($movies as $movie)
            <li>
                [{{ $movie -> original_title }}] {{ $movie -> title }}: {{ $movie -> vote }}
                <br>
                date: {{ $movie -> date }}
                <br>
                nationality: {{ $movie -> nationality }}
            </li>
        @endforeach
    </ul>

@endsection
