@extends('layouts.main')


@section('content')

<div class="container">
    <h1>Title</h1>

    <ul>
        @foreach ($filmsTitle as $film)
            <li>{{$film->title}}</li>
        @endforeach
        prova
    </ul>

</div>

@endsection