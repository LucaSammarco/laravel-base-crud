@extends('layouts.app')

@section('page-title' )
    Animals
@endsection

@section('main-content')
    <h1>Welcome to the Animals</h1>


    <div class="card">
        <div class="card-header">
            <h2>{{ $animal->name }}</h2>
        </div>

        <div class="card-body">

            <p>{{ $animal->age }}</p>

        </div>


@endsection
