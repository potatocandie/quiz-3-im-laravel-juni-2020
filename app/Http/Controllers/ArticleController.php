<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Article;
use Session;

class ArticleController extends Controller
{
    public function erd()
    {
        return view('articles.erd');
    }

    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->paginate(4);
        return view('articles.index')->withArticles($articles);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => ['required', 'unique:articles', 'max:255'],
            'isi' => ['required'],
        ]);

        $judul = $request->judul;
        $slug = Str::slug($judul, '-');

        $article = Article::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'slug' => $slug,
        ]);

        $article->save();

        if (Session::get('success')) {
            # code...
        }
        Session::flash('success', 'Your article has been saved!');

        return redirect()->route('articles.index');
    }

    public function show($id)
    {
        $article = Article::find($id);
        return view('articles.show')->withArticle($article);
    }

    public function edit($id)
    {
        $article = Article::find($id);
        return view('articles.edit')->withArticle($article);
    }

    public function update(Request $request, $id)
    {
        $article = Article::find($id);

        $request->validate([
            'judul' => ['required', 'unique:articles,judul,' . $article->id, 'max:255'],
            'isi' => ['required'],
        ]);

        $judul = $request->input('judul');
        $slug = Str::slug($judul, '-');

        $article->judul = $request->input('judul');
        $article->isi = $request->input('isi');
        $article->slug = $slug;

        $article->save();

        Session::flash('success', 'Your article has been updated!');

        return redirect()->route('articles.show', ['id' => $article->id]);
    }

    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();

        Session::flash('success', 'Your article has been deleted!');
        return redirect()->route('articles.index');
    }
}
