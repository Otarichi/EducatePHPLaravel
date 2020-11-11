@extends('layout')

@section('content')
<form method="POST" action={{route('car.insert')}}>
    @csrf
    <div>
        <input name='name' placeholder='name'>
        <input name='make' placeholder='make'>
        <input name='model' placeholder='model'>
        <input name='license_number' placeholder='license number'>
        <input type="number" name='weight' placeholder='weight'>
        <input type="number" name='registration_year' placeholder='registration year'>
        <input type="submit">        
    </div>
</form>
@endsection
