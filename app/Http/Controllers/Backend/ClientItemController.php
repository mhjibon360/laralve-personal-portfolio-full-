<?php

namespace App\Http\Controllers\Backend;

use App\Models\ClientItem;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class ClientItemController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $allClient = ClientItem::all();
    return view('backend.pages.client-item.all-client', compact('allClient'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('backend.pages.client-item.add-client');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    // id	icon	name	role	comment	created_at	updated_at	
    // return ($request->all());

    $request->validate([
      'icon' => 'nullable',
      'name' => 'required',
      'role' => 'required',
      'comment' => 'required',
    ]);

    ClientItem::insert([
      'icon' => $request->icon,
      'name' => $request->name,
      'role' => $request->role,
      'comment' => $request->comment,
      'created_at' => Carbon::now(),
    ]);
    Toastr::success("Client review  inserted Success");
    return redirect()->route('client-item.index');
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    $client = ClientItem::findOrFail($id);
    if ($client->status == '1') {
      $client->update([
        'status' => 0
      ]);
      Toastr::warning("client Inactive Success");
      return redirect()->back();
    } else {
      $client->update([
        'status' => 1
      ]);
      Toastr::info("client Active Success");
      return redirect()->back();
    }
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    $client = ClientItem::where('id', $id)->first();
    return view('backend.pages.client-item.edit-client', compact('client'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {

    $request->validate([
      'icon' => 'nullable',
      'name' => 'required',
      'role' => 'required',
      'comment' => 'required',
    ]);

    ClientItem::where('id', $id)->update([
      'icon' => $request->icon,
      'name' => $request->name,
      'role' => $request->role,
      'comment' => $request->comment,
      'updated_at' => Carbon::now(),
    ]);
    Toastr::info("Client review  update Success");
    return redirect()->route('client-item.index');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    ClientItem::where('id', $id)->delete();
    Toastr::warning("Client Item Delete Success");
    return redirect()->back();
  }
}
