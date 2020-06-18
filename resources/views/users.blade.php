@extends('layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <p>
                            All users name:
                            @foreach($users as $user)
                                <br><a href={{ route('users', $user->id) }} > {{ $user->name }}</a>
                            @endforeach

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
