<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $allCategory = BlogCategory::all();
    return view('backend.pages.blog-category.all-blog-category', compact('allCategory'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('backend.pages.blog-category.add-blog-category');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    // validate category name and unique name accepted
    $request->validate([
      'category_name' => 'required|max:100|unique:blog_categories,category_name',
    ]);

    // insert category name in database
    BlogCategory::insert([
      'category_name' => $request->category_name,
      'slug' => strtolower(str_replace(' ', '-', $request->category_name)),
      'created_at' => Carbon::now(),
    ]);
    Toastr::success("Blog category Inserted Success");
    return redirect()->route('blog-category.index');
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    $category = BlogCategory::findOrFail($id);
    if ($category->status == '1') {
      $category->update([
        'status' => 0,
      ]);
      Toastr::info("Blog category Inactive Success");
      return redirect()->route('blog-category.index');
    } else {
      $category->update([
        'status' => 1,
      ]);
      Toastr::success("Blog category Active Success");
      return redirect()->route('blog-category.index');
    }
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    $category = BlogCategory::findOrFail($id);
    return view('backend.pages.blog-category.edit-blog-category', compact('category'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    // validate category name and unique name accepted
    $request->validate([
      'category_name' => 'required|max:100|unique:blog_categories,category_name,' . $id,
    ]);

    // insert category name in database
    BlogCategory::where('id', $id)->update([
      'category_name' => $request->category_name,
      'slug' => strtolower(str_replace(' ', '-', $request->category_name)),
      'updated_at' => Carbon::now(),
    ]);
    Toastr::success("Blog category Inserted Success");
    return redirect()->route('blog-category.index');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    BlogCategory::where('id', $id)->delete();
    Toastr::warning("Blog category delete Success");
    return redirect()->route('blog-category.index');
  }
}
