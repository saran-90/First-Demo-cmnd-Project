<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input; 
use Illuminate\Http\Request;
use App\Gallery;
use DB;
use Session;
use File;
use Storage;
use Category;
class GalleryController extends Controller
{
    public function addgallery(Request $request){
       // dd('hello');
        $this->validate($request,[
        'gallery_name'=>'required',
        'category'=>'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);    
         $images=array();
    if($files=$request->file('photos')){
        foreach($files as $file){
            $name=$file->getClientOriginalName();
            $file->move('/gallery_images',$name);
            $images[]=$name;
        }
    }

          if($request->hasFile('image')){
            $image = $request->file('image');
            $tmp_name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/gallery_images');
            $image->move($destinationPath, $tmp_name);  
             
            $gallery = new Gallery;
            $gallery->gallery_name = $request->input('gallery_name');
            $gallery->category = $request->input('category');
            $gallery->image = $tmp_name;
            $gallery->location = $request->input('location');
            $gallery->flat_type = $request->input('flat_type');
            $gallery->square_feet = $request->input('square_feet');
            $gallery->description = $request->input('description');
             $gallery->photos = implode("|",$images);
            $gallery->save();
          
        }
          return back()->with('success1','Your Project added succssfully');
        
    }
    public function showgallery() {   
        $gallery  = DB::table('galleries')->get();
        return view('admin.gallery')->with ('gallery',$gallery);
       // return view('user');
    }
     public function updategallery(Request $request)
    {
        $gallery = Gallery::findOrFail($request->id);
        $gallery->update($request->all());
       
         if(Input::hasFile('image'))
          {
        $usersImage = public_path('gallery_images/'.$gallery->image); 
        if (File::exists($usersImage)) { 
            unlink($usersImage);
        }
            //$gallery =  unlink(public_path('gallery_images/'.  $gallery->image));
            $image = $request->file('image');
            $tmp_name =  time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/gallery_images');
            $image->move($destinationPath, $tmp_name); 
            $gallery->image = $tmp_name;                  
        }
            $gallery->save();
        return back();
    }

    public function deletegallery($id){ 

        $gal1 = Gallery::findOrFail($id);
        if (!(empty($gal1->image))){
            unlink(public_path('gallery_images/'.  $gal1->image));
        }
        $gal1 -> delete(); 
         return back();
    }

  

    public function showgalleryall() {   
        $gallery = DB::table('galleries')
                   ->leftJoin('categories',
                    'galleries.category', '=', 'categories.category_name')
                   ->paginate(6);
                //   dd($gallery);
        return view('gallery')->with ('gallery',$gallery);
       // return view('user');
    }
   
    public function galleryCat(Request $request){
            
            $cat_id = $request->category_name; 
           
        //  
              if($cat_id!="")
            {
                $gallery  = DB::table('galleries')
                        ->leftJoin('categories', 'galleries.category', '=', 
                            'categories.category_name')
                         ->where('galleries.category',$cat_id) 
                        ->paginate(6);
                        // dd($gallery);   
               return view('gallerysearch',[
                 'gallery' => $gallery 
                ]); 
                }    
             else{
                  echo "<h1 align='center'>No Members found under this your Matches</h1>";
            }     
    }
      
}
