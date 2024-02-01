<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\SkillCaption;
use Illuminate\Http\Request;
use App\Models\PortfolioCaption;
use App\Http\Controllers\Controller;
use App\Models\BlogCaption;
use App\Models\ClientCaption;
use App\Models\ContactCaption;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\Facades\Image;

class SectionCaptionController extends Controller
{
  /**
   * portfolio section caption edit
   */
  public function portfolioCaptionedit()
  {
    $portfolio = PortfolioCaption::first();
    return view('backend.pages.portfolio.caption-edit', compact('portfolio'));
  }
  /**
   * portfolio section caption update
   */
  public function portfolioCaptionupdate(Request $request, $id)
  {
    $request->validate([
      'title' => 'required',
      'details' => 'required',
    ]);
    PortfolioCaption::where('id', $id)->update([
      'title' => $request->title,
      'details' => $request->details,
      'updated_at' => Carbon::now(),
    ]);
    Toastr::info("Portfolio Section Caption Updated Success");
    return redirect()->back();
  }
  // ====================================end portfolio caption=====================================================
  /**
   * skill section caption edit
   */
  public function skillCaptionedit()
  {
    $skill = SkillCaption::first();
    return view('backend.pages.skill.edit-skill-caption', compact('skill'));
  }
  /**
   * skill section caption update
   */
  public function skillCaptionupdate(Request $request, $id)
  {
    if ($request->file('image')) {
      $request->validate([
        'title' => 'required',
        'details' => 'required',
        'image' => 'required',
      ]);

      // unlink old iamge
      $image = $request->file('image');
      $name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
      $url = "upload/Skill/" . $name;
      Image::make($image)->resize(470, 470)->save(public_path("upload/Skill/") . $name);

      //unlink old image
      $skillImage = SkillCaption::findOrFail($id);
      if ($skillImage->image) {
        unlink($skillImage->image);
      }


      skillCaption::where('id', $id)->update([
        'title' => $request->title,
        'details' => $request->details,
        'image' => $url,
        'updated_at' => Carbon::now(),
      ]);
      Toastr::info("skill Section Caption Updated Success");
      return redirect()->back();
    } else {
      $request->validate([
        'title' => 'required',
        'details' => 'required',
        'image' => 'nullable',
      ]);

      skillCaption::where('id', $id)->update([
        'title' => $request->title,
        'details' => $request->details,
        'updated_at' => Carbon::now(),
      ]);
      Toastr::info("skill Section Caption Updated Success");
      return redirect()->back();
    }
  }
  // ====================================end skill caption=====================================================

  /**
   * client section caption edit
   */
  public function clientCaptionedit()
  {
    $client = ClientCaption::first();
    return view('backend.pages.client.caption-edit', compact('client'));
  }
  /**
   * client section caption update
   */
  public function clientCaptionupdate(Request $request, $id)
  {
    $request->validate([
      'title' => 'required',
      'details' => 'required',
    ]);
    ClientCaption::where('id', $id)->update([
      'title' => $request->title,
      'details' => $request->details,
      'updated_at' => Carbon::now(),
    ]);
    Toastr::info("client Section Caption Updated Success");
    return redirect()->back();
  }
  // ====================================end client caption=====================================================
  /**
   * blog section caption edit
   */
  public function blogCaptionedit()
  {
    $blog = BlogCaption::first();
    return view('backend.pages.blog.caption-edit', compact('blog'));
  }
  /**
   * blog section caption update
   */
  public function blogCaptionupdate(Request $request, $id)
  {
    $request->validate([
      'title' => 'required',
      'details' => 'required',
    ]);
    BlogCaption::where('id', $id)->update([
      'title' => $request->title,
      'details' => $request->details,
      'updated_at' => Carbon::now(),
    ]);
    Toastr::info("blog Section Caption Updated Success");
    return redirect()->back();
  }
  // ====================================end blog caption=====================================================
  /**
   * contact section caption edit
   */
  public function contactCaptionedit()
  {
    $contact = contactCaption::first();
    return view('backend.pages.contact.caption-edit', compact('contact'));
  }
  /**
   * contact section caption update
   */
  public function contactCaptionupdate(Request $request, $id)
  {
    $request->validate([
      'title' => 'required',
      'details' => 'required',
    ]);
    ContactCaption::where('id', $id)->update([
      'title' => $request->title,
      'details' => $request->details,
      'updated_at' => Carbon::now(),
    ]);
    Toastr::info("contact Section Caption Updated Success");
    return redirect()->back();
  }
  // ====================================end contact caption=====================================================

}
