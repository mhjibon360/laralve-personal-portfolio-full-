<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Hero;
use App\Models\User;
use App\Models\Typed;
use App\Models\BlogItem;
use App\Models\Services;
use App\Models\FooterTop;
use App\Models\HomeAbout;
use App\Models\Skillitem;
use App\Models\ClientItem;
use App\Models\Experience;
use App\Models\BlogCaption;
use App\Models\SkillCaption;
use Illuminate\Http\Request;
use App\Models\ClientCaption;
use App\Models\PortfolioItem;
use App\Models\ContactCaption;
use App\Models\ContactMessage;
use App\Mail\ContactMessageMail;
use App\Models\PortfolioCaption;
use App\Models\PortfolioCategory;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{
  /**
   * home page 
   */
  public function index()
  {
    $typedText = Typed::where('status', 1)->orderBy('id', 'desc')->get();
    $hero = Hero::first();
    $services = Services::where('status', 1)->orderBy('title', 'asc')->get();
    $about = HomeAbout::first();
    $portfolioCaption = PortfolioCaption::first();
    $portFolioCategory = PortfolioCategory::where('status', 1)->orderBy('category_name', 'asc')->get();
    $allportfolioItem = PortfolioItem::where('status', 1)->orderBy('title', 'asc')->get();
    $skillCaptions = SkillCaption::first();
    $skillItem = Skillitem::where('status', 1)->get();
    $exp = Experience::first();
    $clientCaptions = ClientCaption::first();
    $allclient = ClientItem::where('status', 1)->latest()->get();
    $blogCaptions = BlogCaption::first();
    $blogs = BlogItem::where('status', 1)->latest()->get();
    $contactCaptions = ContactCaption::first();
    return view('frontend.pages.index', compact([
      'typedText', 'hero', 'services', 'about', 'portfolioCaption',
      'portFolioCategory', 'allportfolioItem', 'skillCaptions', 'skillItem', 'exp',
      'clientCaptions', 'allclient', 'blogCaptions', 'blogs', 'contactCaptions'
    ]));
  }

  /**
   * cv download
   */
  public function cvDwonload(Request $request)
  {
    $homeAbout = HomeAbout::first();
    $findCv = $homeAbout->cv_file;

    Toastr::success("Download Cv in Process");
    return response()->download($findCv);
  }

  /**
   * user send message and mail
   */
  public function sendMessage(Request $request)
  {
    //validate form data
    $request->validate([
      'name' => 'required',
      'email' => 'required',
      'subject' => 'required',
      'message' => 'required',
    ], ([
      'name.required' => 'please enter your name',
      'email.required' => 'please enter your email',
      'subject.required' => 'please enter your subject',
      'message.required' => 'please enter your message',
    ]));

    // send message
    $message = new ContactMessage();
    $message->name = $request->name;
    $message->email = $request->email;
    $message->subject = $request->subject;
    $message->message = $request->message;
    $message->save();

    // send mail
    Mail::send(new ContactMessageMail($request->all()));



    return redirect()->back()->with(['message' => 'Congratulations!! We Received Your Message']);
  }

  /**
   * portfolio page 
   */
  public function portfolio()
  {
    return view('frontend.pages.portfolio');
  }
  /**
   * portfolioDetails page 
   */
  public function portfolioDetails($id, $slug)
  {
    $portfolioDetails = PortfolioItem::findOrFail($id);
    $relatedPortfolio = PortfolioItem::where('port_cat_id', $portfolioDetails->port_cat_id)->where('id', '!=', $portfolioDetails->id)->where('status', 1)->get();;

    return view('frontend.pages.portfolio-details', compact('portfolioDetails', 'relatedPortfolio'));
  }
  /**
   * blog page 
   */
  public function blog()
  {
    return view('frontend.pages.blog');
  }
  /**
   * blogDetails page 
   */
  public function blogDetails($id, $slug)
  {
    $singleBlog = BlogItem::findOrFail($id);
    $tags = $singleBlog->tags;
    $tag = (explode(',', $tags));

    $view_key = $singleBlog->id;
    if (!Session::has($view_key)) {
      $singleBlog->increment('view');
      Session::put($view_key, 1);
    }

    $previoustBlog = BlogItem::where('id', '<', $singleBlog->id)->first();
    $nextBlog = BlogItem::where('id', '>', $singleBlog->id)->first();

    return view('frontend.pages.blog-details', compact(['singleBlog', 'tag', 'previoustBlog', 'nextBlog']));
  }

  /** 
   * all blog page
   */
  public function allBlog()
  {
    $allblog = BlogItem::where('status', 1)->paginate(6);
    return view('frontend.pages.all-blog', compact('allblog'));
  }
  /** 
   * all allportfolio page
   */
  public function allportfolio()
  {
    $portCategory = PortfolioCategory::where('status', 1)->latest()->get();
    $allPortfolio = PortfolioItem::where('status', 1)->latest()->get();
    return view('frontend.pages.all-portfolio', compact(['allPortfolio', 'portCategory']));
  }

  /**
   * author blog
   */
  public function authorBlog($name)
  {
    $user = User::where('name', $name)->first();
    $authorBlogPost = BlogItem::where('status', 1)->where('user_id', $user->id)->paginate('4');
    return view('frontend.pages.author-blog', compact('authorBlogPost', 'user'));
  }
}
