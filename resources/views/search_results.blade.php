@extends('layouts.app')

@section('title', 'Search')

@section('content')
<div class="container mt-4">
    <h1>Search</h1>

    <form action="{{ route('search') }}" method="get">
        <div class="input-group mb-3">
            <input type="text" name="query" class="form-control" placeholder="Search...">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </div>
    </form>

    @if($results->count() > 0)
    <h2>Search Results</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Birthdate</th>
                <th>Address</th>
                <th>Education</th>
            </tr>
        </thead>
        <tbody>
            @foreach($results as $result)
            <tr>
                <td>{{ $result->name }}</td>
                <td>{{ $result->birthdate }}</td>
                <td>{{ $result->address }}</td>
                <td>{{ $result->education }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>No results found.</p>
    @endif
</div>
@endsection