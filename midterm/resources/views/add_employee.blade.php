@extends('layout')

@section('content')
<form method="POST" action= {{ route('employees.insert')}} >
    @csrf
    <input type="text" name="name" value="">
    <input type="number" name="lastname" value="">
    <input type="date" name="birthdate" value="">
    <input type="text" name="personal_id" value="">
    <input type="number" name="salary" value="">
    <input type="submit">
</form>
    
@endsection