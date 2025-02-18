<div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{route('homepage')}}">{{env('APP_NAME')}}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('homepage')}}">Home<span class="sr-only"></span></a>
      </li>
      @auth
      <li class="nav-item">
        <a class="nav-link" href="{{route('form-articolo')}}">Crea articolo</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('articoli')}}">Articoli</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('dashboard')}}">Dahsboard</a>
      </li>
      @endauth
    @auth
    <li class="nav-item">
      <a class="nav-link" href="#" onclick="
      event.preventDefault();
      getElementById('form-logout').submit();
      ">Logout</a>
      <form id="form-logout" action="/logout" method="POST" class="d-none">@csrf</form>
      </li>
    @else
    <li class="nav-item">
        <a class="nav-link" href="/register">Registrati</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/login">Login</a>
      </li>
    @endauth

    <!-- @guest @endguest -->
    </ul>
  </div>
</nav>
</div>