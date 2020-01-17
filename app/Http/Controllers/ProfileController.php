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
    public function index(){
        $user = Auth::user();
        $profiles  = $user->profiles()->orderBy('id','desc')->first();
     
        
        return view('setting.profile_index',['profiles'=>$profiles]);
    }
    
    public function create(){
        
        return view('profile.create');
        
    } 
    
    public function edit($id){
        $profiles = Profile::find($id);
        return view('profile.edit', ['profiles'=>$profiles]);
        
    } 
    
    public function store(Request $request)
    {   
        
    
        $this->validate($request, [
            'name' => 'required|string|max:191',
            'content' => 'required|string|max:191',
            'image_url' => 'required|file|image|max:2048'
        ]);
        
        $profile = new Profile();
        $profile->image_url = $request->image_url->storeAs('public/profile_images', Auth::id() . '.jpg');
        $profile->name = $request->name;
        $profile->content = $request->content;
        $profile->user_id = Auth::user()->id;
        $profile->save();
        
        $user = Auth::user();
        $profiles = $user->profiles()->orderBy('id','desc')->first();
        // $reports = $user->reports()->orderBy('id','desc')->get();
        
        
        // $is_image = false;
        // if (Storage::disk('local')->exists('public/profile_images/' . Auth::id() . '.jpg')) {
        //     $is_image = true;
        // }
        
        return view('setting.profile_index',['profiles'=>$profiles]);
    }
    
    public function update(Request $request,$id){
        
        $this->validate($request, [
            'name' => 'string|max:191',
            'content' => 'string|max:191',
            'image_url' => 'file|image|max:2048'
        ]);
        $user = Auth::user();
        
        $profile = $user->profiles()->find($id);
        if (\Auth::id() === $profile->user_id) {
            if ($request->hasFile('image_url')){ 
                $profile->image_url = $request->file('image_url')->storeAs('public/profile_images', Auth::id() . '.jpg');
            }
            $profile->name = $request->name;
            $profile->content = $request->content;
            $profile->save();
        }
        $profiles = $user->profiles()->orderBy('id','desc')->first();
        return view('setting.profile_index',['profiles'=>$profiles]);
        
    }
}
