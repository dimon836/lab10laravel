@extends('layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <p>It's {{ $vars }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
