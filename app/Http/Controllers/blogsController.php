<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class blogsController extends Controller
{
    //
    public function display()
    {

        $category = new Category();
        $categorys = Category::all();
        $data = compact('categorys');
        return view('createblog')->with($data);
    }
    public function store(Request $request)
    {
        $this->validate($request, ['title' => 'required', 'content' => 'required', 'blogimg' => 'mimes:png,jpg,jpeg,webp', 'tags' => 'required', 'category' => 'required', 'userid' => 'required']);

        $newPost = new Post();
        $filename = $request->file('blogimg')->store('upload');
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
    public function adminPostList()
    {
        // $postlist = Post::all();
        // $postlists = compact('postlist', 'category');
        // return view('Admin.adminbloglist')->with($postlists);
        $postlist = Post::with('getcategory')->get();
        $postlist = compact('postlist');
        return view('Admin.adminbloglist')->with($postlist);

    }
}