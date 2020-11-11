@extends('layout')

@section('content')
<a href={{route('employees.add')}}>Add new employee</a>
<table class="table" cellpadding="10" >
    <tr>
        <th>Name</th>
        <th>Lastname</th>
        <th>Birthdate</th>
        <th>Personal ID</th>
        <th>Salary</th>
        <th>delete</th>
        <th>edit</th>
    </tr>

    @foreach($employees as $em)
        <tr>
        <td>{{ $em->name }}</td>
        <td>{{ $em->lastname }}</td>
        <td>{{ $em->birthdate }}</td>
        <td>{{ $em->personal_id }}</td>
        <td>{{ $em->salary }}</td>
        <td>
            <form action={{ route('employees.delete', ['id'=>$em->id]) }} method="post">
            @csrf
            <button>Delete</button>
            </form>
        </td>
        <td>
            <a href={{ route('employees.edit', ['id'=>$em->id])}}>Edit</a>
        </td>
        </tr>
    @endforeach
</table>
@endsection