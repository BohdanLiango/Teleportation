@extends('layout')
<div class="container">
    <div class="row align-items-center vh-100">
        <div class="col-6 mx-auto">
            <div class="card shadow border">
                <h3 class="text-center">Cities</h3>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">City</th>
                        <th scope="col">Slug</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($showAll as $city)
                        <tr>
                            <th scope="row">{{ $city->id }}</th>
                            <td>{{ $city->title }}</td>
                            <td>{{ $city->city_slug_id }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="pagination justify-content-center">{{ $showAll->links('pagination::simple-bootstrap-5') }}</div>
            </div>
            <div class="card shadow border">
                <div class="card-body d-flex flex-column align-items-center">
                    <a href="{{ route('welcome') }}" class="btn btn-secondary">Back to main page</a>
                </div>
            </div>
        </div>
    </div>
</div>
