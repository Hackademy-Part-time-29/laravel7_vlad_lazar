<x-html-part>
<h1>Recupera la password</h1>
@if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
@endif
<form method="POST" action="{{route('password.email')}}">
    @csrf
  <div class="form-group">
    <label class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" value="{{old('email')}}">
    @error('email')
    <span>{{$message}}</span>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary">Recupera password</button>
</form>
</x-html-part>