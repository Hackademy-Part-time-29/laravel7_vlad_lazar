<x-html-part>
    <h1>Crea la categoria</h1>
    @if(session()->has('success'))
<div class="alert alert-success" role="alert">
    {{session('success')}}
</div>
@endif
<form method="POST" action="{{route('categories.store')}}">
    @csrf
  <div class="mb-3">
    <label class="form-label">Titolo</label>
    <input type="text" class="form-control" name="title" value="{{old('title')}}">
    @error('title')
    <div class="alert alert-danger" role="alert">
        {{$message}}
    </div>
    @enderror
  </div>
  <div class="form-group">
  <label class="form-label">Descrizione</label>
  <textarea class="form-control" name="description">{{old('description')}}</textarea>
  @error('description')
    <div class="alert alert-danger" role="alert">
        {{$message}}
    </div>
    @enderror
</div>
  <button type="submit" class="btn btn-primary">Crea categoria</button>
</form>
</x-html-part>