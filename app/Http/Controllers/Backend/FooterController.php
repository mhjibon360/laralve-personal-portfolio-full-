<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FooterController extends Controller
{
  /**
   * edit footer
   */
  public function edit()
  {
    $footer = Footer::first();
    return view('backend.pages.footer-top.footer', compact('footer'));
  }
  /**
   * edit footer
   */
  public function update(Request $request, $id)
  {
    $request->validate([
      'left_title' => 'required',
      'right_title' => 'required',
    ]);

    //update title
    Footer::where('id', $id)->update([
      'left_title' => $request->left_title,
      'right_title' => $request->right_title,
      'updated_at' => Carbon::now(),
    ]);
    Toastr::info("Footer Title Updated success");
    return redirect()->back();
  }
}
