<?php

namespace App\Http\Controllers;

use App\Models\BlogCommentModel;
use Illuminate\Http\Request;

class BlogComment extends Controller
{
    // public function blogcomment() {
    //     $data['getRecord']= BlogCommentModel::getComment();
    //     $getRecord = $data['getRecord'];
    //     dd($getRecord->toArray());
    //     return view('backend.blogcomment.list',$data);
    // } 
    public function blogcomment() {
        $getRecord = BlogCommentModel::with(['commentBelongto','blog_comment_reply'])->paginate(10);
        // dd($getRecord->toArray());
        return view('backend.blogcomment.list',compact('getRecord'));
    }
    public function activecomment($id) {
        // update status of comment and its replies to 1
        BlogCommentModel::where('id',$id)->update(['status'=>1]);
        BlogCommentModel::find($id)->blog_comment_reply()->update(['status'=>1]);
        return redirect()->back()->with('success','Comment Activated Successfully');
    }
    public function deactivecomment($id) {
        // update status of comment and its replies to 0
        BlogCommentModel::where('id',$id)->update(['status'=>0]);
        BlogCommentModel::find($id)->blog_comment_reply()->update(['status'=>0]);
        return redirect()->back()->with('success','Comment Deactivated Successfully');
    }
    public function deletecomment($id) {
        BlogCommentModel::destroy($id);
        return redirect('panel/blogcomment/list')->with('success','Comment Deleted Successfully');
    }
}
