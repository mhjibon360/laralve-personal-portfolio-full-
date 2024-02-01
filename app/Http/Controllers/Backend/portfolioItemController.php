<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\PortfolioItem;
use Illuminate\Support\Carbon;
use App\Models\PortfolioCategory;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class portfolioItemController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $portfolioItem = PortfolioItem::all();
    return view('backend.pages.portfolio.portfolioitem.all-portfolio-item', compact('portfolioItem'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $categories = PortfolioCategory::where('status', 1)->orderBy('category_name', 'asc')->get();
    return view('backend.pages.portfolio.portfolioitem.add-portfolio-item', compact('categories'));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {

    // id	user_id	port_cat_id	title	details	image	status	created_at	updated_at	

    $request->validate([
      'port_cat_id' => 'required',
      'title' => 'required',
      'details' => 'required',
      'details' => 'nullable',
      'image' => 'required',
    ]);

    // store left image path
    $image = $request->file('image');
    $name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
    $url = "upload/Portfolio/" . $name;
    $image->move(public_path("upload/Portfolio/"), $name);
    // Image::make($image)->resize(550, 550)->save(public_path('upload/About/') . $name);


    //update home about data
    PortfolioItem::insert([
      'user_id' => Auth::user()->id,
      'port_cat_id' => $request->port_cat_id,
      'title' => $request->title,
      'slug' => Str::slug($request->title),
      'details' => $request->details,
      'image' => $url,
      'created_at' => Carbon::now(),
    ]);
    Toastr::success("Portfolio Item Inserted Success");
    return redirect()->route('portfolio-item.index');
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    $portfolio = PortfolioItem::findOrFail($id);
    if ($portfolio->status == '1') {
      $portfolio->update([
        'status' => 0
      ]);
      Toastr::warning("portfolio item Inactive Success");
      return redirect()->back();
    } else {
      $portfolio->update([
        'status' => 1
      ]);
      Toastr::info("portfolio item Active Success");
      return redirect()->back();
    }
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    $categories = PortfolioCategory::where('status', 1)->orderBy('category_name', 'asc')->get();
    $item = PortfolioItem::findOrFail($id);
    return view('backend.pages.portfolio.portfolioitem.edit-portfolio-item', compact(['categories', 'item']));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    if ($request->file('image')) {
      // id	user_id	port_cat_id	title	details	image	status	created_at	updated_at	

      $request->validate([
        'port_cat_id' => 'required',
        'title' => 'required',
        'details' => 'required',
        'details' => 'nullable',
        'image' => 'required',
      ]);

      // store left image path
      $image = $request->file('image');
      $name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
      $url = "upload/Portfolio/" . $name;
      $image->move(public_path("upload/Portfolio/"), $name);
      // Image::make($image)->resize(550, 550)->save(public_path('upload/About/') . $name);

      $portfolio = PortfolioItem::findOrFail($id);
      if ($portfolio->image) {
        unlink($portfolio->image);
      }

      //update home about data
      PortfolioItem::where('id', $id)->update([
        'user_id' => Auth::user()->id,
        'port_cat_id' => $request->port_cat_id,
        'title' => $request->title,
        'slug' => Str::slug($request->title),
        'details' => $request->details,
        'image' => $url,
        'updated_at' => Carbon::now(),
      ]);
      Toastr::info("Portfolio Item Updated Success");
      return redirect()->route('portfolio-item.index');
    } else {
      $request->validate([
        'port_cat_id' => 'required',
        'title' => 'required',
        'details' => 'required',
        'details' => 'required',
        'image' => 'nullable',
      ]);


      //update home about data
      PortfolioItem::where('id', $id)->update([
        'user_id' => Auth::user()->id,
        'port_cat_id' => $request->port_cat_id,
        'title' => $request->title,
        'slug' => Str::slug($request->title),
        'details' => $request->details,
        'updated_at' => Carbon::now(),
      ]);

      Toastr::info("Portfolio Item Updated Success");
      return redirect()->route('portfolio-item.index');
    }
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    $portfolio = PortfolioItem::findOrFail($id);
    if ($portfolio->image) {
      unlink($portfolio->image);
    }
    $portfolio->delete();
    Toastr::warning("Portfolio Item Delete Success");
    return redirect()->route('portfolio-item.index');
  }
}
