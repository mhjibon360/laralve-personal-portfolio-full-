<?php

namespace App\Http\Controllers\Backend;

use App\Models\Skillitem;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use App\Models\Skillitem as ModelsSkillitem;

class SkillItemController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $skiillItms = Skillitem::all();
    return view('backend.pages.skill.all-skill', compact('skiillItms'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('backend.pages.skill.add-skill');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    // validate aniamted title text
    $request->validate([
      'title' => 'required|max:255|unique:skillitems,title',
      'percent' => 'required|numeric|max:100',
      'color' => 'required',
    ]);

    // insert animated text to databse
    Skillitem::insert([
      'user_id' => Auth::user()->id,
      'title' => $request->title,
      'percent' => $request->percent,
      'color' => $request->color,
      'created_at' => Carbon::now(),
    ]);
    Toastr::success("Aniated Text Added Success");
    return redirect()->route('skill-item.index');
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    $skillitem = Skillitem::findOrFail($id);
    if ($skillitem->status == '1') {
      $skillitem->update([
        'status' => 0
      ]);
      Toastr::warning("skill item Inactive Success");
      return redirect()->back();
    } else {
      $skillitem->update([
        'status' => 1
      ]);
      Toastr::info("skill item Active Success");
      return redirect()->back();
    }
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    $skill = Skillitem::findOrFail($id);
    return view('backend.pages.skill.edit-skill', compact('skill'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    // validate aniamted title text
    $request->validate([
      'title' => 'required|max:255|unique:skillitems,title,' . $id,
      'percent' => 'required|numeric|max:100',
      'color' => 'required',
    ]);

    // insert animated text to databse
    Skillitem::where('id', $id)->update([
      'user_id' => Auth::user()->id,
      'title' => $request->title,
      'percent' => $request->percent,
      'color' => $request->color,
      'updated_at' => Carbon::now(),
    ]);
    Toastr::info("Skill Item Update Success");
    return redirect()->route('skill-item.index');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    Skillitem::where('id', $id)->delete();
    Toastr::warning("Skill item deleted Success");
    return redirect()->route('skill-item.index');
  }
}
