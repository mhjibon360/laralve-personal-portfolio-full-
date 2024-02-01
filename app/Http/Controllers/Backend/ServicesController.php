<?php

namespace App\Http\Controllers\Backend;

use App\Models\Services;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ServicesController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $services = Services::all();
    return view('backend.pages.services.all-services', compact('services'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('backend.pages.services.add-services');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {

    // id	user_id	title	details	status	created_at	updated_at	

    $request->validate([
      'title' => 'required|max:255|unique:services,title',
      'details' => 'required'
    ], ([
      'title.required' => 'please enter your services title',
      'details.required' => 'please enter your services little descriptions',
    ]));
    Services::insert([
      'user_id' => Auth::user()->id,
      'title' => $request->title,
      'details' => $request->details,
      'created_at' => Carbon::now(),
    ]);
    Toastr::success("New service Inserted Success");
    return redirect()->route('services.index');
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    $services = Services::findOrFail($id);
    if ($services->status == '1') {
      $services->update([
        'status' => 0
      ]);
      Toastr::warning("Services Inactive Success");
      return redirect()->back();
    } else {
      $services->update([
        'status' => 1
      ]);
      Toastr::info("Services Active Success");
      return redirect()->back();
    }
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    $services = Services::where('id', $id)->first();
    return view('backend.pages.services.edit-services', compact('services'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    // id	user_id	title	details	status	created_at	updated_at	

    $request->validate([
      'title' => 'required|max:255|unique:services,title,' . $id,
      'details' => 'required'
    ], ([
      'title.required' => 'please enter your services title',
      'details.required' => 'please enter your services little descriptions',
    ]));
    Services::where('id', $id)->update([
      'user_id' => Auth::user()->id,
      'title' => $request->title,
      'details' => $request->details,
      'updated_at' => Carbon::now(),
    ]);
    Toastr::info("service Updated Success");
    return redirect()->route('services.index');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //delte services
    Services::where('id', $id)->delete();
    Toastr::warning("Services Delete Success");
    return redirect()->back();
  }
}
