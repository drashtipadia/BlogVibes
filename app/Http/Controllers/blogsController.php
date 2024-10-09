<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Post;
use App\Models\register_user;
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

        // $filename = $request->file('blogimg')->move('upload');

        $filename = time() . $request->file('blogimg')->getClientOriginalName();
        $path = 'uploads/img/';
        $request->file('blogimg')->move($path, $filename);



        $newPost = new Post();
        $newPost->title = $request['title'];
        $newPost->content = $request['content'];
        $newPost->image = $filename;
        //$newPost->image = $file["blogimg"];
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
        $postlist = Post::with('getcategory')->with('getUser')->get();
        $postlist = compact('postlist');
        return view('Admin.adminbloglist')->with($postlist);
    }
    public function adminblog($id)
    {

        $posts = Post::where('post_id', $id)->with('getcategory')->with('getUser')->get();
        $posts = compact('posts');
        return view('Admin.adminblogdetails')->with($posts);

        // $post = Post::where('post_id', $id)->first();
        // $user = register_user::where('user_id', $post->user_id)->first();
        // $category = Category::where('category_id', $post->category_id)->first();

        // $data = ['post' => $post, 'username' => $user->name, 'category' => $category->category_name];
        // return view('Admin.adminblogdetails')->with(['data' => $data]);
    }
}