<x-html-part>
    <h1>Lista delle categorie</h1>
    @if(session()->has('success'))
<div class="alert alert-success" role="alert">
    {{session('success')}}
</div>
@endif
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titolo</th>
      <th scope="col">Azioni</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        @foreach($categories as $category)
      <th scope="row">{{$category->id}}</th>
      <td>{{$category->title}}</td>
      <td>
        <a href="{{route('categories.show',$category)}}" class="btn btn-outline-primary">Vedi</a>
        <a href="{{route('categories.edit',$category)}}" class="btn btn-outline-success">Modifica</a>
        <form method="POST" action="{{route('categories.destroy',$category)}}">
            @csrf
            @method('DELETE') 
            <button type="submit" class="btn btn-outline-danger">Elimina</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</x-html-part>