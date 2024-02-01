<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Hero;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HeroController extends Controller
{
  /**
   * edit hero
   */
  public function edit()
  {
    $hero = Hero::first();
    return view('backend.pages.hero.edit-hero', compact('hero'));
  }
  /**
   * update hero
   */
  public function update(Request $request, $id)
  {
    $id = $request->id;
    // check image get or not
    if ($request->file('image')) {
      $request->validate([
        'title' => 'required|max:255',
        'details' => 'required',
        'btn_text' => 'required|max:255',
        'image' => 'required',
      ]);
      //image pat store
      $image = $request->file('image');
      $name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
      $url = "upload/Home/" . $name;
      $image->move(public_path("upload/Home"), $name);

      //unlink old image
      $hero = Hero::where('id', $id)->first();
      if ($hero->image) {
        unlink($hero->image);
      }
      //update hero data
      Hero::where('id', $id)->update([
        'user_id' => Auth::user()->id,
        'title' => $request->title,
        'details' => $request->details,
        'btn_text' => $request->btn_text,
        'image' => $url,
        'updated_at' => Carbon::now(),
      ]);
      Toastr::info("Hero/Home Information Update Success With Background Image");
      return redirect()->back();
    } else {
      $request->validate([
        'title' => 'required|max:255',
        'details' => 'required',
        'btn_text' => 'required|max:255',
        'image' => 'nullable',
      ]);

      //update hero data
      Hero::where('id', $id)->update([
        'user_id' => Auth::user()->id,
        'title' => $request->title,
        'details' => $request->details,
        'btn_text' => $request->btn_text,
        'updated_at' => Carbon::now(),
      ]);
      Toastr::info("Hero/Home Information Update Success With Background Image");
      return redirect()->back();
    } //end else part
  } //end method
}
