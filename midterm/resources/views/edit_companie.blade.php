@extends('layout')

@section('content')
<form method="POST" action= {{ route('companies.update')}} >
    @csrf
    <input type="hidden" value={{$companie->id}} name="id">
    <input type="text" name="name" value={{$companie->name}}>
    <input type="number" name="code" value={{$companie->code}}>
    <input type="text" name="address" value={{$companie->address}}>
    <input type="text" name="city" value={{$companie->city}}>
    <input type="text" name="country" value={{$companie->country}}>
    <input type="submit">
</form>
    
@endsection