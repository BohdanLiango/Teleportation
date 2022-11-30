@extends('layout')
<div class="container">
    <div class="row align-items-center vh-100">
        <div class="col-4 mx-auto">
            <div class="card shadow border">
                <div class="card-body d-flex flex-column align-items-center">
                    <p class="card-text">Calculate destinations</p>
                    <a href="{{ route('destination') }}" class="btn btn-primary">Go</a>
                </div>
            </div>
            <div class="card shadow border">
                <div class="card-body d-flex flex-column align-items-center">
                    <p class="card-text">Available Cities</p>
                    <a href="{{ route('cities') }}" class="btn btn-primary">Go</a>
                </div>
            </div>
            <div class="card shadow border">
                <div class="card-body d-flex flex-column align-items-center">
                    <p class="card-text">Available Routes</p>
                    <a href="{{ route('routes') }}" class="btn btn-primary">Go</a>
                </div>
            </div>
        </div>
    </div>
</div>
