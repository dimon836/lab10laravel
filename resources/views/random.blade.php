@extends('layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <form action="{{ route('guessed') }}" method="get">
                            <input type="number" name="number" id="number" placeholder="Enter num"><br>
                            <button class="btn btn-success" type="submit">Guess</button><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
