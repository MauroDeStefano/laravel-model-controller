@extends('layouts.main')


@section('content')

<div class="container">
    <h1>Home</h1>
    <h2>Ciao 
    </h2>

    <ul>
        @foreach ($films as $film )
            <li>{{$film->title}} - {{$film->original_title}} - {{$film->id}}</li>
        @endforeach
  
    </ul>

</div>

@endsection