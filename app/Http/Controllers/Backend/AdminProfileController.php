<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminProfileController extends Controller
{
  /**
   * edit profile
   */
  public function editProfile()
  {
    $id = Auth::user()->id;
    $admin = User::findOrFail($id);
    return view('backend.pages.admin-profile.show-profile', compact('admin'));
  }
  /**
   * updateProfile profile
   */
  public function updateProfile(Request $request)
  {
    // validate
    if ($request->file('image')) {
      // validate update data
      $id = $request->id;

      $request->validate([
        'name' => 'required|max:100',
        'email' => 'required|email|unique:users,email,' . $id,
        'username' => 'required',
        'image' => 'required',
      ]);

      // store image
      $image = $request->file('image');
      $name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
      $url = "upload/Admin/" . $name;
      $image->move(public_path("upload/Admin/"), $name);


      // unlink this account old image
      $user = User::findOrFail($id);
      if ($user->image) {
        unlink($user->image);
      }
      //  id	name	email	phone	username	image	facebook	twitter	instagram	role	status	
      //  email_verified_at	password	remember_token	created_at	updated_at	
      // update user informations
      User::where('id', $id)->update([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'username' => $request->username,
        'image' => $url,
        'facebook' => $request->facebook,
        'twitter' => $request->twitter,
        'instagram' => $request->instagram,
        'twitter' => $request->twitter,
        'twitter' => $request->twitter,
        'updated_at' => Carbon::now(),
      ]);
      Toastr::info("Profile Update Success");
      return redirect()->back();
    } else {
      // validate update data
      $id = $request->id;

      $request->validate([
        'name' => 'required|max:100',
        'email' => 'required|email|unique:users,email,' . $id,
        'username' => 'required',
        'image' => 'nullable',
      ]);


      User::where('id', $id)->update([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'username' => $request->username,
        'facebook' => $request->facebook,
        'twitter' => $request->twitter,
        'instagram' => $request->instagram,
        'twitter' => $request->twitter,
        'twitter' => $request->twitter,
        'updated_at' => Carbon::now(),
      ]);
      Toastr::info("Profile Update Success");
      return redirect()->back();
    }
  }

  /**
   * update password 
   */
  public function UpdatePassword(Request $request)
  {
    $id = $request->id;
    // current password vliadate/news password validate/confirm paassword validate
    $request->validate([
      'password' => 'required',
      'new_password' => 'required',
      'confirm_password' => 'same:new_password',
    ]);

    if (Hash::check($request->password, Auth::user()->password)) {
      User::where('id', $id)->update([
        'password' => Hash::make($request->new_password),
      ]);
      Toastr::success("Password Change Success");
      return redirect()->back();
    } else {
      Toastr::error("Your Current Password does't match,please check and try again");
      return redirect()->back();
    }
  }
}
