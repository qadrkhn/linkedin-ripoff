@extends('layouts.app')

@section('content')

    <div class="container mt-5">
        <h1>Name : {{ auth()->user()->name }}</h1>
        <h1>Email : {{ auth()->user()->email }}</h1>

    </div>


@endsection
