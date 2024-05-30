<x-html-part>
<h1>Registrati adesso</h1>
<form method="POST" action="/register">
    @csrf
  <div class="form-group">
    <label class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" value="{{old('email')}}">
    @error('email')
    <span>{{$message}}</span>
    @enderror
  </div>
  <div class="form-group">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" name="name" value="{{old('name')}}">
    @error('name')
    <span>{{$message}}</span>
    @enderror
  </div>
  <div class="form-group">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
    @error('password')
    <span>{{$message}}</span>
    @enderror
  </div>
  <div class="form-group">
    <label class="form-label">Conferma la password</label>
    <input type="password" class="form-control" name="password_confirmation">
  </div>
  <button type="submit" class="btn btn-primary">Registrati</button>
</form>
</x-html-part>