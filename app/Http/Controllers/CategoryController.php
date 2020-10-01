<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use DB;
use Response;
use App\User;
use Session;
use Auth;
class CategoryController extends Controller
{

    public function addcategory(Request $request){
        $this->validate($request,[
        'category_name'=>'required',
        ]);     
            $category = new Category;
            $category->category_name = $request->input('category_name');
            $category->save();
            return back()->with('success1','Your Category added succssfully');
        }
     public function showcategory()
    {   
        $category  = DB::table('categories')->get();
        return view('admin.category')->with ('category',$category);
      
    }
     
     public function updatecategory(Request $request)
    {
        //dd('all');
        //dd($request->all());
        $category = Category::findOrFail($request->id);
        $category->update($request->all());
        return back();
    }

    public function deletecategory($id)
    {   
        $category = Category::findOrFail($id);
        $category -> delete(); 
        return back();
    }

    
}
