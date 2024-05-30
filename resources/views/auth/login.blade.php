<x-html-part>
<h1>Fai il login</h1>
<form method="POST" action="/login">
    @csrf
  <div class="form-group">
    <label class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" value="{{old('email')}}">
    @error('email')
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
  <div class="form-check">
    <input type="checkbox" name="remember "class="form-check-input">
    <label class="form-check-label">Ricordati di me</label>
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
  <a href="{{route('password.request')}}">Recupera la tua password</a>
</form>
</x-html-part>