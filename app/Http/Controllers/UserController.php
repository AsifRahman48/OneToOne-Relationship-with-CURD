<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;

class UserController extends Controller
{
    public function index()
    {
        $users=User::with('profile')->get();
        return view('user.index',compact('users'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email'=>'required',
            'address' => 'required',
            'age'=>'required',
        ]);

        $user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
        ]);

        $user->profile()->create([
            'address'=>$request->address,
            'age'=>$request->age,
        ]);
        $request->session()->flash('msg','Data Inserted');
        return redirect('user');
    }
    public function edit( $id)
    {
        $users=User::find($id);
        return view('user.edit',compact('users'));
    }

    public function update(Request $request, User $user)
    {

        $user=User::find($request->id);
        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
        ]);

        $user->profile()->update([
            'address'=>$request->address,
            'age'=>$request->age,
        ]);

        $request->session()->flash('msg','Data Updated');
        return redirect('user');
    }

    public function destroy( $id)
    {
        User::find($id)->delete();

//        User::destroy(array('id',$id));

        return redirect('user')->with('msg','Data Deleted');
    }

}
