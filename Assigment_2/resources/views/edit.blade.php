@extends('layout')

@section('content')
<form method="POST" action={{route('car.update')}}>
    @csrf
    <div>
        <input type="hidden" value={{$car->id}} name="id">
        <input name='name' placeholder='name' value={{$car->name}}>
        <input name='make' placeholder='make' value={{$car->make}}>
        <input name='model' placeholder='model' value={{$car->model}}>
        <input name='license_number' placeholder='license number' value={{$car->license_number}}>
        <input type="number" name='weight' placeholder='weight' value={{$car->weight}}>
        <input type="number" name='registration_year' placeholder='registration year' value={{$car->registration_year}}>
        <input type="submit">        
    </div>
</form>
@endsection
