<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    //
    public function display()
    {

        return redirect('admincategory');
    }
    public function view()
    {
        $category = Category::all();
        $data = compact('category');
        return view('Admin.category')->with($data);
    }
    public function store(Request $request)
    {
        //echo $request['categoryname'];

        $category = new Category();
        $category->category_name = $request['categoryname'];
        if ($category->save()) {
            return redirect('admincategory')->with('success', 'Category Add Successfully');
        }

    }
    public function delete($id)
    {
        $category = Category::find($id)->delete();
        return redirect()->back();
    }
}