@extends('layouts.app')

@section('page-title')
    Animals
@endsection

@section('main-content')
    <h1 class="text-center m-5">Welcome to the Jungle</h1>

    <div class="row m-5">
        @foreach ($animals as $animal)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="{{ $animal->image_url }}" class="card-img-top" alt="{{ $animal->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $animal->name }}</h5>
                        <p class="card-text"><strong>Species:</strong> {{ $animal->species }}</p>
                        <p class="card-text"><strong>Age:</strong> {{ $animal->age }} years old</p>
                        <p class="card-text">{{ $animal->description }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
