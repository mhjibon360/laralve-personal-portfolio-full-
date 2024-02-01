<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\GeneralSetting;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use App\Models\SeoSetting;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\Facades\Image;

class SettingController extends Controller
{
  /**
   * show setting main page
   */
  public function settingpage()
  {
    return view('backend.pages.setting.setting');
  }

  /**
   * general setting edit page 
   */
  public function generalSettingEdit()
  {

    $generalSetting = GeneralSetting::first();
    return view('backend.pages.setting.general-setting', compact('generalSetting'));
  }

  /**
   * general setting update 
   */
  public function generalSettingUpdate(Request $request, $id)
  {
    if ($request->file('logo')) {
      //form data validate 
      $request->validate([
        'home_page_title' => 'required',
        'all_blog_page_title' => 'required',
        'all_portfolio_page_title' => 'required',
      ]);

      // store left image path
      $logo = $request->file('logo');
      $name = hexdec(uniqid()) . '.' . $logo->getClientOriginalExtension();
      $url = "upload/Logo/" . $name;
      Image::make($logo)->resize(563, 123)->save(public_path('upload/Logo/') . $name);

      //unlink old abouyt image
      $gen = GeneralSetting::where('id', $id)->first();
      if ($gen->image) {
        unlink($gen->image);
      }
      //update home about data
      GeneralSetting::where('id', $id)->update([
        'logo' => $url,
        'home_page_title' => $request->home_page_title,
        'all_blog_page_title' => $request->all_blog_page_title,
        'all_portfolio_page_title' => $request->all_portfolio_page_title,
        'updated_at' => Carbon::now(),
      ]);
      Toastr::info("General Setting Update Success with Logo");
      return redirect()->back();
    } else if ($request->file('favicon')) {
      $request->validate([
        'home_page_title' => 'required',
        'all_blog_page_title' => 'required',
        'all_portfolio_page_title' => 'required',
      ]);

      // store left image path
      $favicon = $request->file('favicon');
      $name = hexdec(uniqid()) . '.' . $favicon->getClientOriginalExtension();
      $fav_url = "upload/Logo/" . $name;
      Image::make($favicon)->resize(35, 35)->save(public_path('upload/Logo/') . $name);

      //unlink old abouyt image
      $gen = GeneralSetting::where('id', $id)->first();
      if ($gen->favicon) {
        unlink($gen->favicon);
      }
      //update home about data
      GeneralSetting::where('id', $id)->update([
        'favicon' => $fav_url,
        'home_page_title' => $request->home_page_title,
        'all_blog_page_title' => $request->all_blog_page_title,
        'all_portfolio_page_title' => $request->all_portfolio_page_title,
        'updated_at' => Carbon::now(),
      ]);
      Toastr::info("General Setting Update Success with Favicon");
      return redirect()->back();
    } else {

      $request->validate([
        'home_page_title' => 'required',
        'all_blog_page_title' => 'required',
        'all_portfolio_page_title' => 'required',
      ]);

      //update home about data
      GeneralSetting::where('id', $id)->update([
        'home_page_title' => $request->home_page_title,
        'all_blog_page_title' => $request->all_blog_page_title,
        'all_portfolio_page_title' => $request->all_portfolio_page_title,
        'updated_at' => Carbon::now(),
      ]);
      Toastr::info("General Setting Update Success without Favicon or Logo");
      return redirect()->back();
    }
  }

  //==============================================seo setting all methods=============================

  /**
   * seo setting edit page
   */
  public function seoSettingEdit()
  {
    $seoSetting = SeoSetting::first();
    return view('backend.pages.setting.seo-setting', compact('seoSetting'));
  }
  /**
   * seo setting update 
   */
  public function seoSettingUpdate(Request $request, $id)
  {
    // return ($request->all());
    //validate seo data
    $request->validate([
      'author_name' => 'required',
      'meta_title' => 'required',
      'meta_keyword' => 'required',
      'meta_descriptions' => 'required',
    ]);

    //update seo setting data
    SeoSetting::where('id', $id)->update([
      'author_name' => $request->author_name,
      'meta_title' => $request->meta_title,
      'meta_keyword' => $request->meta_keyword,
      'meta_descriptions' => $request->meta_descriptions,
    ]);
    Toastr::info("Seo Setting Updated Success");
    return redirect()->back();
  }
  //==============================================seo setting all methods end=============================

}
