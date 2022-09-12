<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image as Image;
use Illuminate\Support\Facades\Hash;
class ProfileController extends Controller
{
    public function index()
    {
        // return view('frontend.profiles.edit_profile');
    }
    public function edit_profile()
    {
        $user = auth()->user();
        $data['user'] = $user;
        return view('frontend.profiles.edit_profile', $data, array('user' => Auth::user()));
    }

    public function update_profile(Request $request)
    {

        $user = User::all();
        $request->validate([
            'name' => 'required|min:2|max:100',
            'email' => 'required|min:2|max:100',
        ], [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
        ]);

        $user = auth()->user();
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'avatar' => $user->avatar,
        ]);
    	if($request->hasFile('avatar')){
    		$avatar = $request->file('avatar');
    		$filename = time() . '.' . $avatar->getClientOriginalExtension();
    		Image::make($avatar)->resize(300, 300)->save( public_path('/profiles/avatars/' . $filename ) );

    		$user = Auth::user();
    		$user->avatar = $filename;
    		$user->save();
    	}
        return redirect()->route('edit_profile', array('user' => Auth::user()))->with('success', 'Profile successfully updated');
    }
        // if (File::exists("/profiles/avatars" . $avatar->avatar)) {
        //     File::delete("/profiles/avatars" . $avatar->avatar);
        // }
        // $avatar = $request->file('avatar');
        // $avatar->avatar = time() . "_" . $avatar->getClientOriginalName();
        // $avatar->move(\public_path("/profiles/avatars"), $avatar->avatar);
        // $request['avatar'] = $avatar->avatar;
        // return view('profiles.edit_profile', array('user' => Auth::user()) );


        public function changePassword()
        {
            return view('frontend.profiles.edit_password');
        }
    
        public function updatePassword(Request $request)
        {
            # Validation
            $request->validate([
                'old_password' => 'required',
                'new_password' => 'required|confirmed',
            ]);
    
            //The new password can't be the same with the old password
            
            #Match The Old Password
            if(!Hash::check($request->old_password, auth()->user()->password)){
                return back()->with("error", "Old Password Doesn't match!");
            }

            if(strcmp($request->old_password, $request->new_password) == 0){
                return back()->with("error", "New Password can't be the same as your Old Password. Pls choose the different password!");
            }
    
    
            #Update the new Password
            User::whereId(auth()->user()->id)->update([
                'password' => Hash::make($request->new_password)
            ]);
    
            return back()->with("status", "Password changed successfully!");
        }
}