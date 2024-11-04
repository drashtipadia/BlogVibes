<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Comment;
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

        // $filename = $request->file('blogimg')->move('upload');

        $filename = time() . $request->file('blogimg')->getClientOriginalName();
        $path = 'uploads/img/';
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
            $path = 'uploads/img/';
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
            return redirect();
        } else {
            echo "<script> alert('something wrong'); </script>";
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

    public function userbloglist($id)
    {

        $posts = Post::where('category_id', $id)->with('getcategory')->with('getUser')->get();
        $posts = compact('posts');
        return view('bloglist')->with($posts);

    }
    public function fullblog($id)
    {
        $posts = Post::where('post_id', $id)->with('getcategory')->with('getUser')->get();
        $comments = Comment::where('post_id', $id)->with('get_user')->get();
        $data = compact('posts', 'comments');
        return view('fullblog')->with($data);

    }
    public function searchquery(Request $request)
    {
        $srch = $request->input('search');
        $posts = Post::where('tags', 'like', "%$srch%")->get();
        $posts = compact('posts');
        return view('bloglist')->with($posts);
    }
    public function allblog()
    {
        $posts = Post::all();
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

}