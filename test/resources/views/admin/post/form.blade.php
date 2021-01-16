@extends('Layouts.admin')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Create New Post</div>

                <div class="card-body">
                    <form method="POST" action="{{ isset($post) ? route('admin.post.update', ['post'=>$post->id]) : route('admin.post.store') }}" enctype="multipart/form-data">
                        @csrf
                        
                        @if (isset($post))
                            @method('PUT')
                        @endif

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Enter Post Title</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                                    value="{{ isset($post) ? $post->title : old('title') }}" required autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Enter Post slug</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug"
                                    value="{{ isset($post) ? $post->slug : old('slug') }}" required autocomplete="slug" autofocus>

                                @error('slug')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Enter Post image</label>

                            <div class="col-md-6">
                                @if (isset($post))
                                    <img src="{{ url($post->image) }}" width="100" height="100">
                                @endif
                                <input type="file" class="form-control-file @error('image') is-invalid @enderror"
                                    name="image" value="{{ old('image') }}" autocomplete="image" autofocus>

                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Enter Post category</label>

                            <div class="col-md-6">
                                <select name="category_id" class="form-control @error('category_id') is-invalid @enderror">
                                    @foreach ($categories as $category)
                                    <option></option>
                                        <option {{ isset($post) && $post->category_id == $category->id ? 'selected=""' : '' }}
                                        value={{$category->id}}> {{$category->name}} </option>
                                    @endforeach
                                </select>

                                @error('category_id')
                                    <span class=" invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Enter Post text</label>

                            <div class="col-md-6">
                                <textarea name="text" rows="10"
                                    class="form-control @error('text') is-invalid @enderror">{{isset($post) ? $post->text : old('text') }}</textarea>

                                @error('text')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <button type="submit" class="btn btn-primary">
                                {{ isset($post) ? "update" : "create new" }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection