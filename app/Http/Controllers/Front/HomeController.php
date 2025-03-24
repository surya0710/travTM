<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Banners;
use App\Models\BlogCommentModel;
use App\Models\BlogModel;
use App\Models\BlogTagsModel;
use App\Models\SubCategoryModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $banners = Banners::where(['status' => 1, 'display_page' => 'home'])->get();
        return view('home',compact('banners'));
    }


// blog started
    public function blogindex() {
        $data['getblog'] = BlogModel::getListFront();
        return view('blog',$data);
    }
    public function blogviatag($tag){
        // Find all blog_ids related to the given tag
        $blogids = BlogTagsModel::where('slug', $tag)->pluck('blog_id');

        // Retrieve all blogs related to the tag
        $getblog = BlogModel::with(['cat_name','blog_comment'=>function($query){
            $query->where('status',1);
        } ,'blog_comment.blog_comment_reply' => function($query){
            $query->where('status',1);
        }])
        ->withcount(['blog_comment'])
        ->whereIn('id', $blogids)
        ->get()
        ->map(function ($blog) {
            // Add a custom field for total count
            $blog->total_comment_count = $blog->blog_comment_count + $blog->blog_comment->sum(fn ($comment) => $comment->blog_comment_reply->count());
            return $blog;
        });
        // dd($getblog->toArray());

        // Optionally, you can return or display the getblog
        return view('blog', compact('getblog'));

    }

    public function blogSingle($slug) {
        $data['getRecent']= BlogModel::getRecentPost();
        $data['getCount'] = BlogModel::blogCatWithCount();
        // $data['getblog'] = BlogModel::getBlogBySlug($slug);
        $data['getblog'] = BlogModel::with(['blog_comment.blog_comment_reply'])
        ->where('slug','=',$slug)->first();
        $current_blog= $data['getblog'];
        // dd($current_blog->toArray());
        $data['previousblog'] = BlogModel::where('id','<',$current_blog->id)
        ->orderBy('id','desc')
        ->first();
        $data['nextblog'] = BlogModel::where('id','>',$current_blog->id)
        ->orderBy('id','asc')
        ->first();
        // Retrieve the blog by slug
        $blogdetail = BlogModel::where('slug', $slug)->firstOrFail();

        // Increment the view count
        $blogdetail->increment('views');
        return view('blogdetail',$data);
    }
    public function storecomment(Request $request){
        // dd($request->all());
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
        return view('contact');
    }

    public function hotels(){
        return view('hotels');
    }

    public function flights(){
        return view('flights');
    }

    public function holidays(){
        return view('holidays');
    }

    public function domesticHolidays(){
        return view('domestic-holidays');
    }
    public function internationalHolidays(){
        return view('internationalHolidays');
    }
    public function visaServices(){
        return view('visa-services');
    }
}
