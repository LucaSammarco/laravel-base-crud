@extends('layouts.app')

@section('page-title')
    {{ $animal->name }}
@endsection

@section('main-content')

    <div class="m-5">
    <h1>{{ $animal->name }}</h1>

    <div class="card mb-4">
        <img src="{{ $animal->image_url }}" class="card-img-top img-fluid" alt="{{ $animal->name }}" style="max-height: 300px; object-fit: contain;">
        <div class="card-header">
            <h2>{{ $animal->name }}</h2>
        </div>

        <div class="card-body">
            <p><strong>Species:</strong> {{ $animal->species }}</p>
            <p><strong>Age:</strong> {{ $animal->age }} years old</p>
            <p>{{ $animal->description }}</p>
        </div>
    </div>
    </div>
@endsection
