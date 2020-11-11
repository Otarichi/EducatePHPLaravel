@extends('layout')

@section('content')
<form method="POST" action= {{ route('employees.update')}} >
    @csrf
    <input type="hidden" value={{$employee->id}} name="id">
    <input type="text" name="name" value={{$employee->name}}>
    <input type="text" name="lastname" value={{$employee->lastname}}>
    <input type="date" name="birthdate" value={{$employee->birthdate}}>
    <input type="text" name="personal_id" value={{$employee->personal_id}}>
    <input type="number" name="salary" value={{$employee->salary}}>
    <input type="submit">
</form>
    
@endsection