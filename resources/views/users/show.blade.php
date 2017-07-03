@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">

                <h1>{{ $user->name }}</h1>

            </div>
            <div class="col-md-2">

            </div>
        </div>
    </div>
@endsection
