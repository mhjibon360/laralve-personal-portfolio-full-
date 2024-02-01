<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\PortfolioCategory;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class PortfolioCategoryController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $allCategory = PortfolioCategory::all();
    return view('backend.pages.portfolio.all-portfolio-category', compact('allCategory'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('backend.pages.portfolio.add-portfolio-category');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    // id	user_id	category_name	status	created_at	updated_at	

    $request->validate([
      'category_name' => 'required|max:255|unique:portfolio_categories,category_name'
    ]);

    //data insert into databse
    PortfolioCategory::insert([
      'user_id' => Auth::user()->id,
      'category_name' => $request->category_name,
      'created_at' => Carbon::now(),
    ]);

    Toastr::success('portfolio category added Success');
    return redirect()->route('portfolio-category.index');
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    $category = PortfolioCategory::findOrFail($id);

    if ($category->status == '0') {
      $category->update([
        'status' => 1,
      ]);
      Toastr::success('portfolio category Active Success');
      return redirect()->route('portfolio-category.index');
    } else {
      $category->update([
        'status' => 0,
      ]);
      Toastr::info('portfolio category InActive Success');
      return redirect()->route('portfolio-category.index');
    }
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    $category = PortfolioCategory::findOrFail($id);
    return view('backend.pages.portfolio.edit-portfolio-category',compact('category'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
        // id	user_id	category_name	status	created_at	updated_at	

        $request->validate([
          'category_name' => 'required|max:255|unique:portfolio_categories,category_name,'.$id
        ]);
    
        //data insert into databse
        PortfolioCategory::where('id',$id)->update([
          'user_id' => Auth::user()->id,
          'category_name' => $request->category_name,
          'updated_at' => Carbon::now(),
        ]);
    
        Toastr::success('portfolio category updated Success');
        return redirect()->route('portfolio-category.index');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    PortfolioCategory::where('id', $id)->delete();
    Toastr::warning('portfolio category delete Success');
    return redirect()->route('portfolio-category.index');
  }
}
