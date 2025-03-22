<?php

namespace App\Http\Controllers;

use App\Models\BlogCommentReply;
use Illuminate\Http\Request;

class BlogCommentReplyController extends Controller
{
    public function activecommentreply($id)  {
        BlogCommentReply::where('id',$id)->update(['status'=>1]);
        return redirect()->back()->with('success','Comment Activated Successfully');
    }
    public function deactivecommentreply($id) {
        BlogCommentReply::where('id',$id)->update(['status'=>0]);
        return redirect()->back()->with('success','Comment Deactivated Successfully');
    }
    public function deletecommentreply($id) {
        BlogCommentReply::destroy($id);
        return redirect('panel/blogcomment/list')->with('success','Comment Deleted Successfully');
    }
}
