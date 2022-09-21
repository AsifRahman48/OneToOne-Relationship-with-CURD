<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $post=Post::with('comments')->get();
        return view('Post/index',compact('post'));
    }

    public function create()
    {
        return view('Post/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
       $post= new Post;
       $post->title=$request->input('title');

       if($request->hasFile('image'))
       {
           $file=$request->file('image');
           $extension=$file->getClientOriginalExtension();
           $filename=time().'.'.$extension;
           $path=Storage::disk('public')->put("Image",$file);
           $post->image=$path;
       }
       $post->save();
        //$request->session()->flash('msg','Data Inserted');
        return redirect('post')->with('msg','Data Insert');
    }

    public function edit($id)
    {
        $post=Post::find($id);
        return view('post/edit',compact('post'));
    }

    public function update(Request $request, $id)
    {
//        $post=Post::find($id);
//       // dd($post) ;
//        $post->update([
//            'title'=>$request->title,
//        ]);
        //dd($post);

        $post=Post::find($request->id);
        $post->title=$request->input('title');

        if($request->hasFile('image'))
        {
            $destination =$post->image;
            if (Storage::disk('public')->exists($destination))
            {
                Storage::disk('public')->delete($destination);
            }

            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $path=Storage::disk('public')->put("Image",$file);
            $post->image=$path;
        }
        $post->save();

        $request->session()->flash('msg','Data Updated');
        return redirect('post');
    }

    public function destroy( $id)
    {
        $delete=Post::find($id);
       // $destination =$delete->image;
        if (Storage::disk('public')->exists(Post::find($id)->image))
        {
            Storage::disk('public')->delete(Post::find($id)->image);
        }
        $delete->comments()->delete();
         $delete->delete();
        return redirect('post')->with('msg','Data Deleted');
    }
}
