<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Articles::get();
        return view('management.articles',['articles'=>$articles]);
    }

    public function upload(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'article_text' => 'required',
            'article_cover' => 'required',
        ]);

        $articleModel = new Articles;
        
        if($request->file()) {
            $article_cover = time().'_'.$request->article_cover->getClientOriginalName();
            $request->file('article_cover')->storeAs('articles', $article_cover, 'public');

            $articleModel->article_cover = time().'_'.$request->article_cover->getClientOriginalName();
            $articleModel->title = $request->title;
            $articleModel->author = $request->author;
            $articleModel->article_text = $request->article_text;
            $articleModel->save();

            return back()
            ->with('status','File has been uploaded.')
            ->with('file', $article_cover);
        }

    }
}
