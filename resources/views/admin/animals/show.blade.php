@extends('layouts.app')

@section('page-title')
    {{ $animal->name }}
@endsection

@section('main-content')
    <h1>{{ $animal->name }}</h1>

    <div class="card mb-4">
        <img src="{{ $animal->image_url }}" class="card-img-top" alt="{{ $animal->name }}">
        <div class="card-header">
            <h2>{{ $animal->name }}</h2>
        </div>

        <div class="card-body">
            <p><strong>Species:</strong> {{ $animal->species }}</p>
            <p><strong>Age:</strong> {{ $animal->age }} years old</p>
            <p>{{ $animal->description }}</p>
        </div>
    </div>
@endsection
