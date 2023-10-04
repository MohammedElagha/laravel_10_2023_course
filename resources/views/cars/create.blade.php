@extends('layouts.app')

@section('title')
    <h1>Add new car</h1>
@endsection


@section('content')
    <form action="{{ URL('cars/store') }}">
        <div class="form-group">
            <label>Brand</label>
            <input type="text" name="brand" class="form-control">
        </div>

        <div class="form-group">
            <label>Model</label>
            <input type="text" name="model" class="form-control">
        </div>

        <div class="form-group">
            <label>Year</label>
            <input type="number" name="year" class="form-control">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
@endsection
