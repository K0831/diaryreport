<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Profile;
use App\User;
use DB;

class ProfileController extends Controller
{
    // protected $redirectTo = '/';
    
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    
    public function create(){
        
        
            
            $user = Auth::user();
            $count = $user->profile->count();
    
            if($count===0){
                 return view('setting.profile');
            }
            else{$profile = Profile::orderBy('id','desc')->first();
               
                 $is_image = false;
                    if (Storage::disk('local')->exists('public/profile_images/' . Auth::id() . '.jpg')) {
                         $is_image = true;
                    }
            
                 return view('setting.edit', ['profile'=>$profile,
                                'is_image'=>$is_image,]);
                } 
        
        
    }
    
    
    
    public function store(Request $request)
    {   
        
    
        $this->validate($request, [
            'name' => 'required|string|max:191',
            'content' => 'required|string|max:191',
            'image_url' => 'required|file|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        
        $request->image_url->storeAs('public/profile_images', Auth::id() . '.jpg');
        
        $is_image = false;
        if (Storage::disk('local')->exists('public/profile_images/' . Auth::id() . '.jpg')) {
            $is_image = true;
        }
        $profile = new Profile();
        $profile->name = $request->name;
        $profile->content = $request->content;
        $profile->user_id = Auth::user()->id;
        $profile->save();
        
        return view('welcome', ['is_image' => $is_image,
                                'name'=>$profile->name,
                                'content'=>$profile->content,
                                'user_id'=>$profile->user_id]);
    }
    
    public function update(Request $request,$id){
        
        $this->validate($request, [
            'name' => 'required|string|max:191',
            'content' => 'required|string|max:191',
            'image_url' => 'required|file|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        
        $profile = \App\Profile::find($id);
        $profile->name = $request->name;
        $profile->content = $request->content;
        $request->image_url->storeAs('public/profile_images', Auth::id() . '.jpg');
        $profile->save();
        
        $is_image = false;
        if (Storage::disk('local')->exists('public/profile_images/' . Auth::id() . '.jpg')) {
            $is_image = true;
        }
        
        return view('welcome', ['is_image' => $is_image,
                                'name'=>$profile->name,
                                'content'=>$profile->content,
                                'user_id'=>$profile->user_id]);
        
    }
}
