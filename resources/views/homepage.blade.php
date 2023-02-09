@extends('layouts.app')

@section('title', 'My Movies')

@section('main-content')
    <div class="container">
        <div class="row">

            @foreach ($movies as $movie)
                <div class="col-3">
                    <div class="card">
                        <h3>
                            {{ $movie->title }}
                        </h3>
                        <h5>
                            {{ $movie->original_title }}
                        </h5>
                        <p>
                            Nationality: {{ $movie->nationality }}
                        </p>
                        <p>
                            Date of release: {{ $movie->date }}
                        </p>
                        <p>
                            Avarage vote: {{ $movie->vote }}
                        </p>
                    </div>
                </div>
            @endforeach
            
        </div>
    </div>
@endsection