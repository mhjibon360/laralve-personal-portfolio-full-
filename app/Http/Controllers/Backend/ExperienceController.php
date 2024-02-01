<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\Experience;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\Facades\Image;

class ExperienceController extends Controller
{
  /**
   * edit experiecne
   */
  public function edit()
  {
    $exp = Experience::first();
    return view('backend.pages.experience.edit-experience', compact('exp'));
  }
  /**
   * update experiecne
   */
  public function update(Request $request, $id)
  {
    // return($request->all());
    if ($request->file('image')) {
      $request->validate([
        'title' => 'required',
        'details' => 'required',
        'image' => 'required',
        'phone_icon' => 'required',
        'phone_number' => 'required',
        'email_icon' => 'required',
        'email_address' => 'required',
      ]);
      //image path
      $image = $request->file('image');
      $name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
      $url = "upload/Experience/" . $name;
      Image::make($image)->resize(550, 550)->save(public_path("upload/Experience/") . $name);

      // unlink image
      $experience = Experience::findOrFail($id);
      if ($experience->image) {
        unlink($experience->image);
      }

      Experience::where('id', $id)->update([
        'title' => $request->title,
        'details' => $request->details,
        'image' => $url,
        'phone_icon' => $request->phone_icon,
        'phone_number' => $request->phone_number,
        'email_icon' => $request->email_icon,
        'email_address' => $request->email_address,
        'updated_at' => Carbon::now(),
      ]);
      Toastr::info("Experience Updated Success");
      return redirect()->back();
    } else {
      $request->validate([
        'title' => 'required',
        'details' => 'required',
        'image' => 'nullable',
        'phone_icon' => 'required',
        'phone_number' => 'required',
        'email_icon' => 'required',
        'email_address' => 'required',
      ]);

      Experience::where('id', $id)->update([
        'title' => $request->title,
        'details' => $request->details,
        'phone_icon' => $request->phone_icon,
        'phone_number' => $request->phone_number,
        'email_icon' => $request->email_icon,
        'email_address' => $request->email_address,
        'updated_at' => Carbon::now(),
      ]);
      Toastr::info("Experience Updated Success");
      return redirect()->back();
    }
  }
}
