<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $users = User::paginate(5);
        return view('backend.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'type' => 'required',
            'phone' => 'required'
        ]);
        User:: create([ 'name'=> $request['name'],
                               'email'=> $request['email'],
                               'phone'=> $request['phone'],
                               'type'=> $request['type'],                               
                               'phone'=> $request['phone'],                               
                               'password'=> Hash::make($request['password'])
                            ]);
     
        return redirect()->route('users.index')
                        ->with('success','User created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('backend.users.show',compact('user'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('backend.users.edit',compact('user'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            // 'email' => 'required',
        ]);
    
        $user->update($request->all());
    
        return redirect()->route('users.index')
                        ->with('success','User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
    
        return redirect()->route('users.index')
                        ->with('success','User deleted successfully');
    }
//     public function upload(Request $request)
// {
//     if($request->hasFile('image')){
//         $filename = $request->image->getClientOriginalName();
//         $request->image->storeAs('images',$filename,'public');
//         Auth()->user()->update(['image'=>$filename]);
//     }
//     return redirect()->back();
// }
    public function edit_profile(){

    }
}


