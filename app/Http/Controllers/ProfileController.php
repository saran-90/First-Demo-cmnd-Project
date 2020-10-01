<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Profile;
use DB;
use Session;
use File;
use Storage;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = Profile::all();
        return view('admin.edit',compact('profile',$profile));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $Profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $profile = Profile::find($id);
        return view('admin.edit',compact('profile',$profile));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
         //return back();
        //   $request->validate([
        //     'user_name' => 'required|min:3',
        //     'image' => 'required|mimes:jpeg,png,jpg',
        // ]);
        
      
//dd('hai');
         $gallery = Profile::findOrFail($request->id);
        //$gallery->update($request->all());   
       
         if(Input::hasFile('image'))
          {
        $usersImage = public_path('adminassets/images/'.$gallery->image); 
        if (File::exists($usersImage)) { 
            unlink($usersImage);
        }
            //$gallery =  unlink(public_path('gallery_images/'.  $gallery->image));
             $file = Input::file('image');
             $tmp_name = time() . '-' . $file->getClientOriginalName();
             $file = $file->move(('adminassets/images'), $tmp_name);
             $gallery->image= $tmp_name;  
             $gallery->save();
         
        }

        else{
        $gallery->update($request->all());
        return redirect('admin/dashboard');
       }
        return redirect('admin/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
