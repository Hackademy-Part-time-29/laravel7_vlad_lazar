<x-html-part>
<h1>Crea il tuo articolo</h1>
@if(session()->has('success'))
<div class="alert alert-success" role="alert">
    {{session('success')}}
</div>
@endif
<!--@if(session()->has('fail'))
<div class="alert alert-danger" role="alert">
{{session('fail')}}
</div>
@endif -->
<div class="row">
    <div class="col-12">
    <form method="POST" action="{{route('articoli.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{old('title')}}">
            @error('title')
            {{$message}}
            @enderror
        </div>
        <div class="form-group">
    <label>Articolo</label>
    <textarea class="form-control @error('body') is-invalid @enderror" rows="3" name="body">{{old('body')}}</textarea>
    @error('body')
    {{$message}}
    @enderror
  </div>
  <div class="mb-3">
  <label for="formFile" class="form-label">Inserisci immagine di copertina</label>
  <input class="form-control" type="file" id="formFile" name="cover">
  @error('cover')
    <span class="small text-danger">{{$message}}</span>
    @enderror
</div>
  <button type="submit" class="btn btn-primary">Invia</button>
</form>
    </div>
</div>
</x-html-part>