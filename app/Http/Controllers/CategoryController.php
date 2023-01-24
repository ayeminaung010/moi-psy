<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    //create
    public function create(CategoryRequest $request){
        $category = new Category();
        $category->name = $request->categoryName;
        $category->save();
        return redirect()->route('category');
    }

    //delete
    public function delete($id){
        $category = Category::find($id);
        $category->delete();
        Alert::success('Delete Success', 'success');
        return redirect()->route('category');
    }



    //edit
    public function edit($id){
        $singleCat = Category::find($id);
        return view('editCategory',compact('singleCat'));
    }

    //update
    public function update(CategoryRequest $request,$id){
        $category = Category::find($id);
        $category->name = $request->categoryName;
        $category->update();
        return redirect()->route('category');
    }
}
