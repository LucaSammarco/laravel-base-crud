@extends('layouts.app')

@section('page-title')
   Edit {{ $animal->name }}
@endsection

@section('main-content')

    <div class="container mt-5">
        <div class="row">

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h3>Edit Animal</h3>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('admin.animals.update', $animal) }}" method="POST">
                        @csrf
                        @method('PUT')

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control" required value="{{ old('name', $animal->name) }}">
                            </div>

                            <div class="form-group">
                                <label for="species">Species</label>
                                <input type="text" name="species" id="species" class="form-control" required value="{{ old('species', $animal->species) }}">
                            </div>

                            <div class="form-group">
                                <label for="age">Age</label>
                                <input type="number" name="age" id="age" class="form-control" required value="{{ old('age', $animal->age) }}">
                            </div>

                            <div class="form-group">
                                <label for="image_url">Image URL</label>
                                <input type="text" name="image_url" id="image_url" class="form-control" required value="{{ old('image_url', $animal->image_url) }}">
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" class="form-control" required>{{ old('description', $animal->description) }}</textarea>
                            </div>

                            <div class="d-flex justify-content-around mt-3">
                                <div class="form-group">
                                    <input type="submit" value="Submit" class="btn btn-primary">
                                </div>

                                <div class="form-group">
                                    <input type="reset" value="Reset" class="btn btn-primary">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
