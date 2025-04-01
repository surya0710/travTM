<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Banners;
use App\Models\BlogCommentModel;
use App\Models\BlogModel;
use App\Models\BlogTagsModel;
use App\Models\CategoryModel;
use App\Models\WebsiteSetting;
use App\Models\SubCategoryModel;
use App\Models\Pages;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $banners = Banners::where(['status' => 1, 'display_page' => 'home'])->get();
        $blogs = BlogModel::where('status',1)->orderBy('id','desc')->limit(3)->get();
        $pageContent = Pages::where('slug', '/')->first();
        return view('home',compact('banners', 'blogs', 'pageContent'));
    }


// blog started
    public function blogindex() {
        $pageContent = Pages::where('slug', 'blogs')->first();
        $blogs = BlogModel::latest()->paginate(12);
        return view('blogs',compact('blogs', 'pageContent'));
    }

    public function blogSingle($slug) {
        $latestBlogs = BlogModel::latest()->take(3)->get();
        $pageContent = BlogMOdel::where('slug', $slug)->first();
        return view('blog-detail', compact('pageContent', 'latestBlogs'));
    }
    public function storecomment(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'comment' => 'required|string',
            'blog_id' => 'required', // Ensures blogid exists in the blogs table
        ]);
        $save = new BlogCommentModel();
        $save->name = $request->input('name');
        $save->email = $request->input('email');
        $save->comment = $request->input('comment');
        $save->blog_id = $request->input('blog_id');
        $save->status = '0';
        $save->save();
        return redirect()->back()->with('success','Your comment has been submitted, please wait for approval.');
    }
    public function contact(){
        $pageContent = Pages::where('slug', 'contact-us')->first();
        return view('contact', compact('pageContent'));
    }

    public function hotels(){
        $pageContent = CategoryModel::where('slug', 'hotels')->first();
        return view('hotels', compact('pageContent'));
    }

    public function flights(){
        $pageContent = CategoryModel::where('slug', 'flights')->first();
        return view('flights', compact('pageContent'));
    }

    public function holidays(){
        $pageContent = CategoryModel::where('slug', 'holidays')->first();
        return view('holidays', compact('pageContent'));
    }

    public function domesticHolidays(){
        return view('domestic-holidays');
    }
    public function internationalHolidays(){
        return view('internationalHolidays');
    }
    public function visaServices(){
        $pageContent = CategoryModel::where('slug', 'visa-services')->first();
        return view('visa-services', compact('pageContent'));
    }

    public function events(){
        $pageContent = CategoryModel::where('slug', 'events')->first();
        return view('events', compact('pageContent'));
    }

    public function passports(){
        $pageContent = CategoryModel::where('slug', 'passports')->first();
        return view('passports', compact('pageContent'));
    }

    public function travelInsurance(){
        $pageContent = CategoryModel::where('slug', 'travel-insurance')->first();
        return view('travel-insurance', compact('pageContent'));
    }

    public function thankyou(){
        $pageContent = Pages::where('slug', 'thankyou')->first();
        return view('thankyou', compact('pageContent'));
    }
}
