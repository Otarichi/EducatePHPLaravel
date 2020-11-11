@extends('layout')

@section('content')
@foreach ($cars as $car)
<div>
    <br>
    <h3>name: {{$car->name}}</h3>
    <h4>make: {{$car->make}}</h4>
    <h4>model: {{$car->model}}</h4>
    <h4>car age: {{intval(("20".Date('y')))-$car->registration_year}}</h4>
    <a href={{route('car.edit')}}?id={{$car->id}}>edit</a>
    <br>
</div>
@endforeach
@endsection