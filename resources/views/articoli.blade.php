<x-html-part>
<h1>Articoli</h1>
    <div class="row">
    {{$articles->links()}}
    @foreach($articles as $article)
        <div class="col-3">
       <x-card :article="$article"/>
        </div>
        @endforeach
    </div>
    
</x-html-part>