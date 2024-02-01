<?php

namespace App\Http\Controllers\Backend;

use App\Models\FooterTop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;

class FooterTopController extends Controller
{
  /**
   * edit footer top
   */
  public function footerTop()
  {
    $footerTop = FooterTop::first();
    return view('backend.pages.footer-top.manage-footer', compact('footerTop'));
  }
  /**
   * edit footer top
   */
  public function footerTopUpdate(Request $request, $id)
  {

    if ($request->file('logo')) {
      //logo path store

      $logo = $request->file('logo');
      $name = hexdec(uniqid()) . '.' . $logo->getClientOriginalExtension();
      $url = "upload/FooterTop/" . $name;
      Image::make($logo)->resize(563, 123)->save(public_path("upload/FooterTop/") . $name);
      // unlink old logo image
      $footerTop = FooterTop::findOrFail($id);
      if ($footerTop->logo) {
        unlink($footerTop->logo);
      }

      FooterTop::where('id', $id)->update([
        'logo' => $url,
        'short_details' => $request->short_details,
        'facebook_icon' => $request->facebook_icon,
        'facebook_link' => $request->facebook_link,
        'instagram_icon' => $request->instagram_icon,
        'instagram_link' => $request->instagram_link,
        'twitter_link' => $request->twitter_link,
        'twitter_icon' => $request->twitter_icon,
        'behance_icon' => $request->behance_icon,
        'behance_link' => $request->behance_link,

        'userful_title' => $request->userful_title,
        'portfolio_title' => $request->portfolio_title,
        'blog_title' => $request->blog_title,

        'contact_info_title' => $request->contact_info_title,
        'contact_info_address' => $request->contact_info_address,
        'contact_info_number' => $request->contact_info_number,
        'contact_info_email' => $request->contact_info_email,

        'helop_info_title' => $request->helop_info_title,
        'login' => $request->login,
        'register' => $request->register,
        'updated_at' => Carbon::now(),
      ]);

      Toastr::info("Information Updated Success");
      return redirect()->back();
    } else {
      FooterTop::where('id', $id)->update([
        'short_details' => $request->short_details,
        'facebook_icon' => $request->facebook_icon,
        'facebook_link' => $request->facebook_link,
        'instagram_icon' => $request->instagram_icon,
        'instagram_link' => $request->instagram_link,
        'twitter_link' => $request->twitter_link,
        'twitter_icon' => $request->twitter_icon,
        'behance_icon' => $request->behance_icon,
        'behance_link' => $request->behance_link,

        'userful_title' => $request->userful_title,
        'portfolio_title' => $request->portfolio_title,
        'blog_title' => $request->blog_title,

        'contact_info_title' => $request->contact_info_title,
        'contact_info_address' => $request->contact_info_address,
        'contact_info_number' => $request->contact_info_number,
        'contact_info_email' => $request->contact_info_email,


        'helop_info_title' => $request->helop_info_title,
        'login' => $request->login,
        'register' => $request->register,
        'updated_at' => Carbon::now(),

      ]);

      Toastr::info("Information Updated Success");
      return redirect()->back();
    }
  }
}
