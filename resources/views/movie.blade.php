@extends('layouts.app')

@section('title', 'Movies')

@section('content')
<section class="bg-mustard py-4">
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
            <div class="col-4 gy-4 d-flex justify-content-center">
                <div class="card h-100 w-75">
                    <div class="card-body text-center">
                        <h5 class="card-title"> {{$movie->title}}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">{{$movie->original_title}}</h6>
                        <p class="card-text">{{$movie->nationality}}</p>
                        <p class="card-text">{{$movie->date}}</p>
                        <p class="card-text">{{$movie->vote}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection