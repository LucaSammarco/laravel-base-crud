@extends('layouts.app')

@section('page-title')
   Create New Animal
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
                        <h3>Create New Animal</h3>
                    </div>



                    <div class="card-body">

                        <form action="{{ route('animals.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                            </div>

                            <div class="form-group">
                                <label for="species">Species</label>
                                <input type="text" name="species" id="species" class="form-control" value="{{ old('species') }}">
                            </div>

                            <div class="form-group">
                                <label for="age">Age</label>
                                <input type="number" name="age" id="age" class="form-control" value="{{ old('age') }}">
                            </div>

                            <div class="form-group">
                                <label for="image_url">Image URL</label>
                                <input type="text" name="image_url" id="image_url" class="form-control" value="{{ old('image_url') }}">
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
                            </div>

                            <div class="d-flex justify-content-around mt-3">
                                <div class="form-group">
                                    <input type="submit" value="Submit" class="btn btn-primary">
                                </div>

                                <div class="form-group">
                                    <input type="submit" value="Reset" class="btn btn-primary">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
