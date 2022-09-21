<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;

class TagController extends Controller
{
    public function index()
    {
        $tag=Tag::all();
      //  dd($tag);
        return view('Tag/index',compact('tag'));
    }

    public function create()
    {
        return view('Tag/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required'
        ]);

        $tag=new Tag;
        $tag->name=$request->input('name');
        $tag->save();

        return redirect('tag')->with('msg','Data Inserted');
    }

    public function destroy($id)
    {
        Tag::find($id);
        Tag::destroy(array('id',$id));
        return redirect('tag')->with('msg','Data Deleted');
    }
}
