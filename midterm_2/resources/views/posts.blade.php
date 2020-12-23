@extends('layout')

@section('content')

@foreach ($products as $product)
    <h3> {{ $product->title }} </h3>
    <h3> {{ $product->text }} </h3>
    <hr/>
@endforeach
@endsection