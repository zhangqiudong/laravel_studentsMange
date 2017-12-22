@extends('layouts.app')

@section('content')
    <h1>home</h1>
    <p>welcome to my web {{ $name }}</p>
    @include('shares.author')
@endsection