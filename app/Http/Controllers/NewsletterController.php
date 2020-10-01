<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input; 
use Illuminate\Http\Request;
use App\Newsletter;
use DB;
use Session;
use File;
use Storage;
use carbon;
class NewsletterController extends Controller
{
    public function addnewsletter(Request $request){
       // dd('hello');
        $this->validate($request,[
        'title'=>'required',
        'date'=>'required',
        'description'=>'required|min:500|max:3000',
        'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);    
          if($request->hasFile('photo')){
            $image1 = $request->file('photo');
            $tmp_name1 = time().'.'.$image1->getClientOriginalExtension();
            $destinationPath = public_path('/newsletter_images');
            $image1->move($destinationPath, $tmp_name1);  
             
            $newsletter = new Newsletter;
            $newsletter->title = $request->input('title');
            $newsletter->date = $request->input('date');
            $newsletter->description = $request->input('description');
            $newsletter->photo = $tmp_name1;
            $newsletter->save();
          
        }
          return back()->with('success1','Your News added succssfully');
        
    }
    public function shownewsletter() {   
        $newsletter  = DB::table('newsletters')->get();
        return view('admin.newsletter')->with ('newsletter',$newsletter);
       // return view('user');
    }
     public function shownews() {   
        $news  = DB::table('newsletters')->paginate(6);
        return view('news')->with ('news',$news);
       // return view('user');
    }
    //  public function shownewsletterindex() {   
    //     $newsletter  = DB::table('newsletters')->get();
    //     return view('index')->with ('newsletter',$newsletter);
    //    // return view('user');
    // }
     public function shownewsletter1() {   
        $newsletter  = DB::table('newsletters')->paginate(6);
        return view('news_letter1')->with ('newsletter',$newsletter);
       // return view('user');
    }
     public function updatenewsletter(Request $request)
    {
        $newsletter = Newsletter::findOrFail($request->id);
        $newsletter->update($request->all());
       
         if(Input::hasFile('photo'))
          {
        $usersImage1 = public_path('newsletter_images/'.$newsletter->photo); 
        if (File::exists($usersImage1)) { 
            unlink($usersImage1);
        }
            //$newsletter =  unlink(public_path('newsletter_images/'.  $newsletter->image));
            $image1 = $request->file('photo');
            $tmp_name1 =  time().'.'.$image1->getClientOriginalExtension();
            $destinationPath = public_path('/newsletter_images');
            $image1->move($destinationPath, $tmp_name1); 
            $newsletter->photo = $tmp_name1;                  
        }
            $newsletter->save();
        return back();
    }

    public function deletenewsletter($id){ 

        $news1 = newsletter::findOrFail($id);
        if (!(empty($news1->photo))){
            unlink(public_path('newsletter_images/'.  $news1->photo));
        }
        $news1 -> delete(); 
         return back();
    }


   
   
   
}
