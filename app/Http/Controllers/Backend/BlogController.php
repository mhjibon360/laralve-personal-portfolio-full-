<?php

namespace App\Http\Controllers\Backend;

use App\Models\BlogItem;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class BlogController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $blogs = BlogItem::all();
    return view('backend.pages.blog-item.all-blog-item', compact('blogs'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $blogCategories = BlogCategory::where('status', 1)->get();
    return view('backend.pages.blog-item.add-blog-item', compact('blogCategories'));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    // id	user_id	category_id	title	slug	view	tags	details	image	created_at	updated_at	
    //validate form data
    $request->validate([
      'category_id' => 'required',
      'title' => 'required',
      'details' => 'required',
      'image' => 'required',
    ]);

    //store image path
    $image = $request->file('image');
    $name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
    $url = "upload/Blog/" . $name;
    Image::make($image)->resize(1300, 590)->save(public_path("upload/Blog/") . $name);

    //insert blog post data into databse
    BlogItem::insert([
      'user_id' => Auth::user()->id,
      'category_id' => $request->category_id,
      'title' => $request->title,
      'slug' => strtolower(str_replace(' ', '-', $request->title)),
      'tags' => $request->tags,
      'details' => $request->details,
      'image' => $url,
      'created_at' => Carbon::now(),

    ]);
    Toastr::success("New Blog post Inserted Success");
    return redirect()->route('blog-item.index');
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    $blog = BlogItem::findOrFail($id);

    if ($blog->status == '1') {
      $blog->update([
        'status' => 0,
      ]);
      Toastr::info("Blog post Inactive Success");
      return redirect()->route('blog-item.index');
    } else {
      $blog->update([
        'status' => 1,
      ]);
      Toastr::success("Blog post Active Success");
      return redirect()->route('blog-item.index');
    }
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    $blogCategories = BlogCategory::where('status', 1)->get();
    $blog = BlogItem::findOrFail($id);
    return view('backend.pages.blog-item.edit-blog-item', compact(['blogCategories', 'blog']));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    if ($request->file('image')) {
      $request->validate([
        'category_id' => 'required',
        'title' => 'required',
        'details' => 'required',
        'image' => 'required',
      ]);

      //store image path
      $image = $request->file('image');
      $name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
      $url = "upload/Blog/" . $name;
      Image::make($image)->resize(1300, 590)->save(public_path("upload/Blog/") . $name);

      // unlink image
      $blog = BlogItem::findOrFail($id);
      if ($blog->image) {
        unlink($blog->image);
      }

      //insert blog post data into databse
      BlogItem::where('id', $id)->update([
        'user_id' => Auth::user()->id,
        'category_id' => $request->category_id,
        'title' => $request->title,
        'slug' => strtolower(str_replace(' ', '-', $request->title)),
        'tags' => $request->tags,
        'details' => $request->details,
        'image' => $url,
        'updated_at' => Carbon::now(),

      ]);
      Toastr::info("Blog post Updated Success");
      return redirect()->route('blog-item.index');
    } else {
      $request->validate([
        'category_id' => 'required',
        'title' => 'required',
        'details' => 'required',
        'image' => 'nullable',
      ]);

      //insert blog post data into databse
      BlogItem::where('id', $id)->update([
        'user_id' => Auth::user()->id,
        'category_id' => $request->category_id,
        'title' => $request->title,
        'slug' => strtolower(str_replace(' ', '-', $request->title)),
        'tags' => $request->tags,
        'details' => $request->details,
        'updated_at' => Carbon::now(),

      ]);
      Toastr::info("Blog post Updated Success");
      return redirect()->route('blog-item.index');
    }
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    $blog = BlogItem::findOrFail($id);
    if ($blog->image) {
      unlink($blog->image);
    }
    $blog->delete();
    Toastr::warning("Blog post delete Success");
    return redirect()->route('blog-item.index');
  }
}
