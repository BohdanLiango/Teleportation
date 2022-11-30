@extends('layout')
<div class="container">
    <div class="row align-items-center vh-100">
        <div class="col-6 mx-auto">
            <div class="card shadow border">
                <h3 class="text-center">Routes</h3>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Leaving from</th>
                        <th scope="col">Arrive In</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($routes as $item)
                        <tr>
                            <th scope="row">{{ $item->id }}</th>
                            <td>{{ $item->city_slug_id }}</td>
                            <td>{{ $item->destination_slug_id }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="pagination justify-content-center">{{ $routes->links('pagination::simple-bootstrap-5') }}</div>
            </div>
            <div class="card shadow border">
                <div class="card-body d-flex flex-column align-items-center">
                    <a href="{{ route('welcome') }}" class="btn btn-secondary">Back to main page</a>
                </div>
            </div>
        </div>
    </div>
</div>
