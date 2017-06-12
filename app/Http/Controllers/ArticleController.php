<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;

use App\Article;

use App\Comment;

use App\Subscription;

use Intervention\Image\ImageManagerStatic as Image;



class ArticleController extends Controller
{
    //
    public function articlepost(){
    	$thisarticle = new Article();
    	$thisarticle->title = Input::get('title');
    	$thisarticle->content = Input::get('content');
        
        $image = Input::file('postimage');
        $filename = time().'.'. $image->getClientOriginalExtension();
        Image::make($image)->resize(1117,642)->encode('jpg')->save(public_path('/content/mypics/'.$filename));

        $thisarticle->image = $filename;

    	$thisarticle->save();
    	return redirect('/');
    }

    public function listarticles(){
        $articles = Article::all();
        return view('article', ['articles' => $articles]);
    }

    public function thearticles($id){
    	$article = Article::find($id);
        $comments = Comment::where('article_id', $id)->get();
        $darticle = Article::inRandomOrder()->get()->take(1);
    	return view('article', ['article' => $article, 'comments' => $comments, 'darticle' => $darticle]);
    }

    public function commentupload(){
    	$thiscomment = new Comment();
    	$thiscomment->comment = Input::get('comment');
    	$thiscomment->name = Input::get('name');
        $thiscomment->article_id = Input::get('article_id');
    	$thiscomment->save();
    	return redirect('/viewarticles'.Input::get('article_id'));
    }

    public function aboutVe(){
        return view('about');
    }

    public function mailpost(){
        $thisemail = new Subscription();
        $thisemail->email = Input::get('email');
        $thisemail->save();
        return redirect('/');  
    }
    public function viewsubs(){
        $subs = Subscription::all();
        return view('subs',['subs'=>$subs]);
    }

    
}
