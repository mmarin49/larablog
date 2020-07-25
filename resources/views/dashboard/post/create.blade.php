<link rel="stylesheet" href="{{ asset("css/app.css") }}">
<script src="{{ asset("js/app.js") }}"></script>



<div class="container">


    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                {{ $error }}
            </div>
        @endforeach
    @endif

    <form action="{{ route("post.store")}}" method="POST">
        @csrf
        <div class="form-groups">
            <label for="title">Título</label>
            <input class="form-control" type="text" name="title" id="title">
            @error('title')
                <small class="text-danger">{{ $message }}</small>
            @enderror
            
        </div> 
        <div class="form-groups">
            <label for="url_clean">Url limpia</label>
            <input class="form-control" type="text" name="url_clean" id="url_clean">    
        </div>
        <div class="form-group">
            <label for="content">Contenidos</label>
            <textarea class="form-control" id="content" name="content" rows="3"></textarea>
        </div>
        <input type="submit" value="Enviar"  class="btn btn-primary">
    </form>

</div>