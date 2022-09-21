<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(){
        $comments=Comment::with('post')->get();
        return view('Comment/index',compact('comments'));
    }

    public function create(){
        $posts=Post::all();
        return view('Comment/create',compact('posts'));
    }

    public function store(Request $request){
        $request->validate([
           'name'=>'required'
        ]);
        $post=Post::find($request->post_id);

        $comment=new Comment;
        $comment->name=$request->name;

        $post->comments()->save($comment);

        $request->session()->flash('msg','Comment Store');
        return redirect('comment');
    }

    public function edit($id){
        $posts=Post::all();
        $comment=Comment::find($id);
        return view('comment/edit',compact('comment','posts'));
    }

    public function update(Request $request ,$id)
    {
//        $comment=Post::find($request->post_id)->comments()->where('id',$id)->first();
//
//        $comment->name=$request->name;
//
//        $comment->update();

        $comment=Comment::find($id);
           $comment ->update([
            'name'=>$request->name,
            'post_id'=>$request->post_id,
        ]);

      //  return $comment;

        $request->session()->flash('msg','Comment Update');
        return redirect('comment');
    }

     public function delete($id){
        Comment::find($id)->delete();

        return redirect('comment')->with('msg','Data Deleted');
    }
}
