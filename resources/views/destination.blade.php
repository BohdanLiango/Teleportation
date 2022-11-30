@extends('layout')
<div class="container">
    <div class="row align-items-center vh-100">
        <div class="col-4 mx-auto">
            <div class="card shadow border">
                <div class="card-body">

                    @if($errors->any())
                        <div class="alert alert-danger" role="alert">
                            {{ implode('', $errors->all(':message')) }}
                        </div>
                    @endif

                    <form method="post" action="{{ route('calculate') }}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Your home city?</label>
                            <select class="form-select" aria-label="Default select example" name="home_city">
                                <option value="" selected>Select</option>
                                @foreach($cities as $city)
                                    <option value="{{ $city->city_slug_id }}">{{ $city->city_slug_id }} - {{ $city->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Leaving from?</label>
                            <select class="form-select" aria-label="Default select example" name="leaving_from">
                                <option value="" selected>Select</option>
                                @foreach($cities as $city)
                                    <option value="{{ $city->city_slug_id }}">{{ $city->city_slug_id }} - {{ $city->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Arrive in?</label>
                            <select class="form-select" aria-label="Default select example" name="arrive_in">
                                <option value="" selected>Select</option>
                                @foreach($cities as $city)
                                    <option value="{{ $city->city_slug_id }}">{{ $city->city_slug_id }} - {{ $city->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="exampleInputEmail1">How long can it take?</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" name="time">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            @if($data !== NULL)
            <div class="card shadow border">
                <div class="card-body d-flex flex-column align-items-center">
                    <p class="card-text">
                        Your home city? <b>{{ $data['home_city'] }}</b>,
                        <br>
                        Leaving from? <b>{{ $data['leaving_from'] }}</b>,
                        <br>
                        Arrive in? <b>{{ $data['arrive_in'] }}</b>,
                        <br>
                        How long can it take? <b>{{ $data['time'] }}</b> hour,
                        @if($info !== NULL) <br> ----------------------------- <br> {{ $info }} @endif
                    </p>
                </div>
            </div>
            @endif

            <div class="card shadow border">
                <div class="card-body d-flex flex-column align-items-center">
                    <a href="{{ route('welcome') }}" class="btn btn-secondary">Back to main page</a>
                </div>
            </div>
        </div>
    </div>
</div>
