<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BlogItem;
use App\Models\ContactMessage;
use App\Models\PortfolioItem;
use App\Models\Services;
use App\Models\Skillitem;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class BackendController extends Controller
{
  /**
   * admin dashboard
   */
  public function index()
  {
    $activetotalServics = Services::where('status', 1)->count();
    $inactivetotalServics = Services::where('status', 0)->count();

    $activetotalportfolio = PortfolioItem::where('status', 1)->count();
    $inactivetotalportfolio = PortfolioItem::where('status', 0)->count();

    $activetotalskill = Skillitem::where('status', 1)->count();
    $inactivetotalskill = Skillitem::where('status', 0)->count();

    $activetotalblog = BlogItem::where('status', 1)->count();
    $inactivetotalblog = BlogItem::where('status', 0)->count();
    $contactMessagecount = ContactMessage::count();
    $contactMessage = ContactMessage::latest()->paginate(10);
    return view('backend.pages.dashboard.index', compact([
      'activetotalServics', 'inactivetotalServics',
      'activetotalportfolio', 'inactivetotalportfolio', 'activetotalskill',
      'inactivetotalskill', 'activetotalblog', 'inactivetotalblog', 'contactMessage','contactMessagecount'
    ]));
  }
  /**
   * admin dashboard
   */
  public function adminLogout(Request $request)
  {
    Auth::guard('web')->logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    Toastr::warning("Logout success");
    return redirect('admin-login');
  }

  /**
   * admin login page
   */
  public function adminLogin()
  {
    return view('backend.pages.auth.admin-login');
  }


  /**
   * dalte user message
   */
  public function deletUserMessage($id)
  {
    ContactMessage::where('id', $id)->delete();
    Toastr::success("User Message Deleted Success");
    return redirect()->back();
  }
}
