<x-html-part>
<h1>Invia mail di conferma</h1>
@if (session('status') == 'verification-link-sent')
    <div class="mb-4 font-medium text-sm text-green-600">
        A new email verification link has been emailed to you!
    </div>
@endif
<form method="POST" action="/email/verification-notification">
    @csrf
  <div class="form-group">
  <button type="submit" class="btn btn-primary">Invia mail</button>
</form>
</x-html-part>