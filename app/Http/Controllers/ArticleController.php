<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        
         $articles = Article::All(); 
    
        return  view('articles',[
            'articles' => $articles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('create_article');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Article::create([
            'title'=> $request->input('title'),
            'subtitle'=> $request->input('subtitle'),
            'content'=> $request->input('content'),
            
        ]);

        return redirect()->route('articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article =  Article::where('id', $id)->firstOrFail(); 

            return view('article',[
                'article' =>$article
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article =  Article::where('id', $id)->firstOrFail(); 
        return view('edit_article',['article' =>$article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $article =  Article::where('id', $id)->firstOrFail(); 
        
        $article->title= $request->input('title');
        $article->subtitle= $request->input('subtitle');
        $article->content= $request->input('content');
        $article->save();
     
         return redirect()->route('articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $article =  Article::where('id', $id)->firstOrFail(); 
       
        $comments = $article->comments;

        if (count($comments)   == 1) {
           
             $comments[0]->delete();
 
        } elseif (count($comments)   > 1) {
           
            foreach ($comments as $comment){ 
            
                $comment->delete();
              } 

        } else {
            
        }

        
        $article->delete();
        return redirect()->route('articles');

    }


}
