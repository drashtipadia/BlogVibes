<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;


class commentController extends Controller
{
    //
    public function store(Request $request)
    {
        // echo $request['comment'], $request['postid'], $request['userid'];
        $com = new Comment();
        $com->comments = $request['comment'];
        $com->post_id = $request['postid'];
        $com->user_id = $request['userid'];
        if ($com->save()) {
            echo "<script>  alert('comment add');</script>";

        }
        return redirect('blogdetails/' . $request['postid']);
    }
    public function admincommentlist()
    {
        $com = Comment::with('get_post')->with('get_user')->get();
        $data = compact('com');
        return view('Admin.admincomments')->with($data);
    }
    public function updatestatus($id)
    {
        $com = Comment::where('comment_id', $id)->value('com_status');
        if ($com === 1) {
            Comment::where('comment_id', $id)->update(['com_status' => '0']);
        } elseif ($com === 0) {
            Comment::where('comment_id', $id)->update(['com_status' => '1']);
        } else {
            return redirect('admincomments')->with('status', 'Status Not Update');
        }
        return redirect('admincomments');
    }
}