@extends('layout')

@section('content')
<a href={{route('employees.add')}}>Add new employee</a>
<table class="table" cellpadding="10" >
    <tr>
        <th>Name</th>
        <th>Code</th>
        <th>address</th>
        <th>city</th>
        <th>country</th>
        <th>delete</th>
        <th>edit</th>
    </tr>

    @foreach($companies as $co)
        <tr>
        <td>{{ $co->name }}</td>
        <td>{{ $co->code }}</td>
        <td>{{ $co->address }}</td>
        <td>{{ $co->city }}</td>
        <td>{{ $co->country }}</td>
        <td>
            <form action={{ route('companies.delete', ['id'=>$co->id]) }} method="post">
            @csrf
            <button>Delete</button>
            </form>
        </td>
        <td>
            <a href="">Edit</a>
        </td>
        </tr>
    @endforeach
</table>
@endsection