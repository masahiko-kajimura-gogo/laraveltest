<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
   public function index()
   {

       $articles = \App\Article::get();
       $data = ['articles' => $articles];
       return view('articles.index', $data);
   }

  public function create()
  {
      return view('articles.create');
  }
  public function store(Request $request)
  {
      $article = \App\Article::create();
      $article->title = $request->title;
      $article->body = $request->body;
      $article->save();
      return redirect()->to('/article');
  }
  public function show($id)
  {
      $article = \App\Article::find($id);
      $data = ['article' => $article];
      return view('articles.show', $data);
  }
  public function edit($id)
  {
      $article = \App\Article::find($id);
      $data = ['article' => $article];
      return view('articles.edit', $data);
  }
  public function update(Request $request, $id)
  {
      $article = \App\Article::find($id);
      $article->title = $request->title;
      $article->body = $request->body;
      $article->save();
      return redirect()->to('/article');
  }
  public function destroy($id)
  {
      $article = \App\Article::find($id);
      $article->delete();
      return redirect()->to('/article');
  }
}
