@extends('Layouts/front')

@section('content')
    <div class="row">
        @foreach ($posts as $post)
            @include('components.post', ['post' => $post])
        @endforeach
    </div>
@endsection