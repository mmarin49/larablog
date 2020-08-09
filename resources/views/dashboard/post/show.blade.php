@extends('dashboard.master')
@section('content')


        @csrf
        <div class="form-groups">
            <label for="title">Título</label>
        <input readonly class="form-control" type="text" name="title" id="title" value="{{$post->title}}">
            @error('title')
                <small class="text-danger">{{ $message }}</small>
            @enderror
            
        </div> 
        <div class="form-groups">
            <label for="url_clean">Url limpia</label>
            <input readonly class="form-control" type="text" name="url_clean" id="url_clean" value="{{$post->url_clean}}">    
        </div>
        <div class="form-group">
            <label for="content">Contenidos</label>
            <textarea readonly class="form-control" id="content" name="content" rows="3">{{$post->content}}</textarea>
        </div>

@endsection


