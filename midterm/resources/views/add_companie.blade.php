@extends('layout')

@section('content')
<form method="POST" action= {{ route('companies.insert'}} >
    @csrf
    <input type="text" name="name" value="">
    <input type="number" name="code" value="">
    <input type="text" name="address" value="">
    <input type="text" name="city" value="">
    <input type="text" name="country" value="">
    <input type="submit">
</form>
    
@endsection