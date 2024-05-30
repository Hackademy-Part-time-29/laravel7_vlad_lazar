<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;

class ArticleController extends Controller
{
    //
    public function showArticles(){
        $articles=Article::paginate(8);
        //$articles=Article::orderBy('created_at',ASC/DESC)->paginate(8);
        //$articles=Article::where('id','>',10)->get();
        //$articles=Article::where('id','>',10)->last();
        //$articles=Article::where('id','>',10)->first();
        //$articles=Article::where('id','>',10)->firstOrFail();
        return view('articoli', compact('articles'));
    }
    public function showArticleForm(){
        return view('articoloform');
    }
    public function seeder(){
        Article::create([
            'title'=>'Articolo 1',
            'body'=>'Lorem ipsum dolor sit amet'
        ]);
        Article::create([
            'title'=>'Articolo 2',
            'body'=>'Lorem ipsum dolor sit amet'
        ]);
        Article::create([
            'title'=>'Articolo 3',
            'body'=>'Lorem ipsum dolor sit amet'
        ]);
    }
    public function showArticle($id){
        //$article=Article::where('id',$id)->first();
        $article=Article::findOrFail($id);
        return view ('articolo',compact('article'));
    }
    public function store(StoreArticleRequest $request){
        $article=Article::create([
            'title'=>$request->title,
            'body'=>$request->body,
        ]);
        if($request->hasFile('cover')){
            $article->update([
                'cover'=>$request->file('cover')->storeAs('public/covers/'.$article->id,'cover.jpg')
            ]);
        }
        return redirect()->back()->with(['success'=>'Articolo inserito con successo']);
    }
}
