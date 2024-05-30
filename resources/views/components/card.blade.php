<div>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="{{Storage::url($article->cover)}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$article->title}}</h5>
    <p class="card-text">{{Str::limit($article->body,50)}}</p>
    <a href="{{route('articolo',$article->id)}}" class="btn btn-primary">Leggi l'articolo</a>
  </div>
</div>
</div>