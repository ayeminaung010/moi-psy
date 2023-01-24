<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsRequest;
use App\Models\Category;
use App\Models\Location;
use App\Models\News;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;

class NewController extends Controller
{
    //create
    public function create(NewsRequest $request){
        $news = new News();

        $news->title = $request->title;
        $news->category_id = $request->categoryId;
        $news->location_id = $request->locationId;
        $news->description = $request->description;
        $imgName = $request->file('photo')->getClientOriginalName();

        $result = $request->file('photo')->storeOnCloudinaryAs('NewsLaravel', rand() . $imgName);
        $img_id = $result->getPublicId();
        $news->photo = $img_id;
        $news->save();

        return redirect()->route('home');
    }

    //delete
    public function delete($id){
        $news = News::find($id);
        Cloudinary::destroy($news->photo);
        $news->delete();
        return redirect()->route('home');
    }

    //edit
    public function edit($id){
        $categories = Category::get();
        $locations = Location::get();
        $new = News::find($id);
        return view('editNew',compact('categories','locations','new'));
    }

    //update
    public function update(Request $request,$id){
        $request->validate([
            'title' => 'required|min:4',
            'categoryId' => 'required',
            'locationId' => 'required',
            'description' => 'required|min:6',
            'photo' => 'mimes:png,jpg,jpeg',
        ]);
        $new = News::find($id);
        $new->title = $request->title;
        $new->description = $request->description;
        $new->category_id = $request->categoryId;
        $new->location_id = $request->locationId;
        if($request->hasFile('photo')){
            Cloudinary::destroy($new->photo);
            $newImg = $request->file('photo')->getClientOriginalName();
            $result = $request->file('photo')->storeOnCloudinaryAs('NewsLaravel', rand() . $newImg);
            $newImg_id = $result->getPublicId();
            $new->photo = $newImg_id;
            $new->save();
        };
        return redirect()->route('home');
    }
}
