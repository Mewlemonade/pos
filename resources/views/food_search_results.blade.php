@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Makanan</h1>
        
        <form action="{{ route('foods.search') }}" method="GET">
            <div class="form-group">
                <input type="text" name="query" class="form-control" placeholder="Cari makanan...">
            </div>
            <button type="submit" class="btn btn-primary">Cari</button>
        </form>

        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>Nama Makanan</th>
                    <th>Jenis Makanan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($results as $food)
                    <tr>
                        <td>{{ $food->name }}</td>
                        <td>{{ $food->food_type }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
