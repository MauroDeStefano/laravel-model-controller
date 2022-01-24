@extends('layouts.main')


@section('content')

<div class="container">
    <h1>Home</h1>
    <h2>Date dei film</h2>

    <ul>
        @foreach ($filmsDates as $film )
            <li>{{$film->date}}</li>
        @endforeach
        
    </ul>

</div>

@endsection