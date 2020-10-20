@extends('Layouts.main', [
	'title' => isset($title) ? $title : 'No Title',
])

@section('content')
	<h1>This is {{$text}} page!</h1>
@endsection