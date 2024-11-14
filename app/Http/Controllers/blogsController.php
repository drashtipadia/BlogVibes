<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;

use Illuminate\Http\Request;

class blogsController extends Controller
{


    public function index()
    {
        $recent = Post::latest()->take(4)->with('getUser')->get();
        $randomblog = Post::inRandomOrder()->with('getcategory')->limit(3)->get();
        $data = compact('recent', 'randomblog');
        return view('index')->with($data);
    }
    public function store(Request $request)
    {
        $this->validate($request, ['title' => 'required|max:50', 'content' => 'required', 'blogimg' => 'mimes:png,jpg,jpeg,webp', 'tags' => 'required', 'category' => 'required', 'userid' => 'required'], ['title.max' => 'Title must be 50 character only..']);

        // $filename = $request->file('blogimg')->move('upload');

        $filename = time() . $request->file('blogimg')->getClientOriginalName();
        $path = 'uploads/';
        $request->file('blogimg')->move($path, $filename);
        $newPost = new Post();
        $newPost->title = $request['title'];
        $newPost->content = $request['content'];
        $newPost->image = $filename;
        $newPost->tags = $request['tags'];
        $newPost->category_id = $request['category'];
        $newPost->user_id = $request['userid'];
        if ($newPost->save()) {
            return redirect('createblog')->with('success', 'Blog successfully upload..Add More Blogs..');
        }

    }

    public function update(Request $request)
    {

        //echo $request['postid'], $request['title'], $request['content'], $request['tags'], $request['category'] . "<br>";
        if ($request['blogimg'] === null) {

            $res = Post::where('post_id', $request['postid'])->update(['title' => $request['title'], 'content' => $request['content'], 'tags' => $request['tags'], 'category_id' => $request['category']]);
            //echo $res;

        } else {
            $updatefile = time() . $request->file('blogimg')->getClientOriginalName();
            $path = 'uploads/';
            $request->file('blogimg')->move($path, $updatefile);
            $res = Post::where('post_id', $request['postid'])->update(['title' => $request['title'], 'content' => $request['content'], 'image' => $updatefile, 'tags' => $request['tags'], 'category_id' => $request['category']]);
        }
        if ($res === 1) {
            //echo "<script> alert('blog update'); </script>";
            return redirect('profile')->with('bloguptodate', 'Blog Update');
        }

    }

    public function deleteblog($id)
    {
        $res = Post::find($id)->delete();
        if ($res === 1) {
            return redirect('profile');
        } else {
            echo "<script> alert('something wrong'); </script>";
        }
    }
    public function userbloglist($id)
    {

        $posts = Post::where('category_id', $id)->where('status', '=', '1')->with('getcategory')->with('getUser')->get();
        $posts = compact('posts');
        return view('bloglist')->with($posts);

    }
    public function fullblog($id)
    {
        $posts = Post::where('post_id', $id)->with('getcategory')->with('getUser')->get();
        $comments = Comment::where('post_id', $id)->where('com_status', '=', '1')->with('get_user')->get();
        $data = compact('posts', 'comments');
        return view('fullblog')->with($data);

    }
    public function searchquery(Request $request)
    {
        $srch = $request->input('search');
        $posts = Post::where('tags', 'like', "%$srch%")->where('status', '=', '1')->get();
        $posts = compact('posts');
        return view('bloglist')->with($posts);
    }
    public function allblog()
    {
        $posts = Post::where('status', '=', '1')->get();
        $posts = compact('posts');
        return view('bloglist')->with($posts);
    }
    public function updateblog($id)
    {
        $posts = Post::where('post_id', $id)->get();
        $categorys = Category::all();
        $posts = compact('posts', 'categorys');
        return view('updateblog')->with($posts);

    }

    //========Admin============

    public function adminPostList()
    {
        $postlist = Post::with('getcategory')->with('getUser')->get();
        $postlist = compact('postlist');
        return view('Admin.adminbloglist')->with($postlist);
    }
    public function adminblog($id)
    {
        $posts = Post::where('post_id', $id)->with('getcategory')->with('getUser')->get();
        $posts = compact('posts');
        return view('Admin.adminblogdetails')->with($posts);
    }

    public function statusupdate($id)
    {
        $res = Post::where('post_id', $id)->value('status');
        if ($res === 1) {
            Post::where('post_id', $id)->update(['status' => '0']);

        } elseif ($res === 0) {
            Post::where('post_id', $id)->update(['status' => '1']);
        } else {
            return redirect('adminBlogs')->with('statuschange', 'Status not Update');
        }
        return redirect('adminBlogs');
    }

}