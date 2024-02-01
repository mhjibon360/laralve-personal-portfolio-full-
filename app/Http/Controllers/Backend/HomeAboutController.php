<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\HomeAbout;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class HomeAboutController extends Controller
{
  /**
   * edit home about
   */
  public function edit()
  {
    $about = HomeAbout::first();
    return view('backend.pages.home-about.about_edit', compact('about'));
  }
  /**
   * update home about
   */
  public function update(Request $request, $id)
  {
    if ($request->file('image')) {
      //form data validate 
      $request->validate([
        'heading' => 'required',
        'leading' => 'required',
        'details' => 'required',
        'cv_file' => 'nullable',
        'image' => 'required',
      ]);

      // store left image path
      $image = $request->file('image');
      $name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
      $url = "upload/About/" . $name;
      Image::make($image)->resize(550, 550)->save(public_path('upload/About/') . $name);

      //unlink old abouyt image
      $about = HomeAbout::where('id', $id)->first();
      if ($about->image) {
        unlink($about->image);
      }
      //update home about data
      HomeAbout::where('id', $id)->update([
        'user_id' => Auth::user()->id,
        'heading' => $request->heading,
        'leading' => $request->leading,
        'details' => $request->details,
        'image' => $url,
        'updated_at' => Carbon::now(),
      ]);
      Toastr::info("Home About Updat Success With Left Profile image");
      return redirect()->back();
    } else if ($request->file('cv_file')) {
      //form data validate 
      $request->validate([
        'heading' => 'required',
        'leading' => 'required',
        'details' => 'required',
        'cv_file' => 'required',
        'image' => 'nullable',
      ]);

      // store left image path
      $cv_file = $request->file('cv_file');
      $name = hexdec(uniqid()) . '.' . $cv_file->getClientOriginalExtension();
      $cv_url = "upload/About/" . $name;
      $cv_file->move(public_path("upload/About/"), $name);

      //unlink old cv file
      $about = HomeAbout::where('id', $id)->first();
      if ($about->cv_file) {
        unlink($about->cv_file);
      }
      //update home about data
      HomeAbout::where('id', $id)->update([
        'user_id' => Auth::user()->id,
        'heading' => $request->heading,
        'leading' => $request->leading,
        'details' => $request->details,
        'cv_file' => $cv_url,
        'updated_at' => Carbon::now(),
      ]);
      Toastr::info("Home About Update Success With cv file");
      return redirect()->back();
    } else {

      $request->validate([
        'heading' => 'required',
        'leading' => 'required',
        'details' => 'required',
        'cv_file' => 'nullable',
        'image' => 'nullable',
      ]);

      //update home about data
      HomeAbout::where('id', $id)->update([
        'user_id' => Auth::user()->id,
        'heading' => $request->heading,
        'leading' => $request->leading,
        'details' => $request->details,
        'updated_at' => Carbon::now(),
      ]);
      Toastr::info("Home About Update Success Without cv or left iamge");
      return redirect()->back();
    }
  }
}
