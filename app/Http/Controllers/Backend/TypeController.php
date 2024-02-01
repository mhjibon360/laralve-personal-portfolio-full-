<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Typed;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mockery\Matcher\Type;

use function PHPSTORM_META\type;

class TypeController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $alltype = Typed::all();
    return view('backend.pages.type.all-type', compact('alltype'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('backend.pages.type.add-type');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    // validate aniamted title text
    $request->validate([
      'type_text' => 'required|max:255|unique:typeds,type_text'
    ]);

    // insert animated text to databse
    Typed::insert([
      'type_text' => $request->type_text,
      'user_id' => Auth::user()->id,
      'created_at' => Carbon::now(),
    ]);
    Toastr::success("Aniated Text Added Success");
    return redirect()->route('type.index');
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    $typed = Typed::where('id',$id)->first();
    if ($typed->status == '1') {
      $typed->update([
        'status' => 0
      ]);
      Toastr::info("Animated Text inactive Success");
      return redirect()->back();
    } else {
      $typed->update([
        'status' => 1
      ]);
      Toastr::info("Animated Text active Success");
      return redirect()->back();
    }
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    $typed=Typed::findOrFail($id);
    return view('backend.pages.type.edit-type',compact('typed'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    // validate aniamted title text
    $request->validate([
      'type_text' => 'required|max:255|unique:typeds,type_text,'.$id
    ]);

    // insert animated text to databse
    Typed::where('id',$id)->update([
      'type_text' => $request->type_text,
      'user_id' => Auth::user()->id,
      'updated_at' => Carbon::now(),
    ]);
    Toastr::info("Aniated Text Change Success");
    return redirect()->route('type.index');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    Typed::where('id', $id)->delete();
    Toastr::warning("Animated Text Deleted Success");
    return redirect()->back();
  }
}
