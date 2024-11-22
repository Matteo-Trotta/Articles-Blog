<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class ArticleController extends Controller implements HasMiddleware
{
    public static function middleware()
    {
        return [
            new Middleware('auth', except: ['index', 'show', 'byCategory', 'byUser','articleSearch']),
        ];
    }




    public function index()
    {
        $articles = Article::where('is_accepted', true)->orderBy('created_at', 'desc')->get();
        return view('article.index', compact('articles'));
    }






    public function create()
    {
        return view('article.create');
    }








    public function store(Request $request)
    {


        $request->validate([
            'title' => 'required|unique:articles|min:5',
            'subtitle' => 'required |min:5',
            'body' => 'required|min:10',
            'image' => 'required|image',
            'category' => 'required',
        ]);


        $articles = Article::create([
            'title' => $request->title,

            'subtitle' => $request->subtitle,

            'body' => $request->body,

            'image' => $request->file('image')->store('public/images'),

            'category_id' => $request->category,

            'user_id' => Auth::user()->id,

        ]);

        //  dd($request->all());
        return redirect(route('homepage'))->with('message', 'Articolo creato con successo, in attesa di revisione');
    }


    public function byCategory(Category $category)
    {
        $articles = $category->articles()->where('is_accepted', true)->orderBy('created_at', 'desc')->get();
        return view('article.by-Category', compact('category', 'articles'));
    }

    public function byUser(User $user)
    {
        $articles = $user->articles()->where('is_accepted', true)->orderBy('created_at', 'desc')->get();
        return view('article.by-User', compact('user', 'articles'));
    }








    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }




    public function edit(Article $article)
    {
        //
    }





    public function update(Request $request, Article $article)
    {
        //
    }





    public function destroy(Article $article)
    {
        //
    }


    public function articleSearch(Request $request)
    {

        $query = $request->input('query');
        $articles = Article::search($query)->where('is_accepted', true)->orderBy('created_at', 'desc')->get();
        return view('article.search-index', compact('articles', 'query'));
    }
}
