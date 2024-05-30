<x-html-part>
<h1>Reset della password</h1>
@if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
@endif
<form method="POST" action="/reset-password">
    @csrf
    <input type="hidden" name="token" value="{{request()->route('token')}}">
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
    <label class="form-label">Nuova password</label>
    <input type="password" class="form-control" name="password">
    @error('password')
    <span>{{$message}}</span>
    @enderror
  </div>
  <div class="form-group">
    <label class="form-label">Conferma password</label>
    <input type="password" class="form-control" name="password_confirmation">
  </div>
  <button type="submit" class="btn btn-primary">Reimposta la password</button>
</form>
</x-html-part>