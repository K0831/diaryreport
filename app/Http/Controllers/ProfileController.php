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
            $count = $user->profiles()->count();
    
            if($count===0){
                 return view('setting.profile');
            }
            else{
                $profiles = $user->profiles()->orderBy('id','desc')->first();
               
                $is_image = false;
                if (
                    Storage::disk('local')->exists('public/profile_images/' . Auth::id() . '.jpg')) {
                    $is_image = true;
                }
            
                 return view('setting.edit', ['profiles'=>$profiles,
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
        
        $request->user()->profiles()->create([
            'name'=>$request->name,
            'content' => $request->content,
            'user_id'=>Auth::user()->id,
        ]);
        
        $user = Auth::user();
        $profiles = $user->profiles()->orderBy('id','desc')->first();
        $reports = $user->reports()->orderBy('id','desc')->get();
        
        $request->image_url->storeAs('public/profile_images', Auth::id() . '.jpg');
        $is_image = false;
        if (Storage::disk('local')->exists('public/profile_images/' . Auth::id() . '.jpg')) {
            $is_image = true;
        }
        
        return view('welcome', ['is_image' => $is_image,
                                'profiles'=>$profiles,
                                'reports'=>$reports]);
    }
    
    public function update(Request $request,$id){
        
        $this->validate($request, [
            'name' => 'string|max:191',
            'content' => 'string|max:191',
            'image_url' => 'file|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        $user = Auth::user();
        
        $profiles = $user->profiles()->find($id);
        $profiles->name = $request->name;
        $profiles->content = $request->content;
        $profiles->save();
        
        $profiles = $user->profiles()->orderBy('id','desc')->first();
        $reports = $user->reports()->orderBy('id','desc')->get();
        
        
        $requests->image_url->storeAs('public/profile_images', Auth::id() . '.jpg');
        $is_image = false;
        if (Storage::disk('local')->exists('public/profile_images/' . Auth::id() . '.jpg')) {
            $is_image = true;
        }
        
        
        return view('welcome', ['is_image' => $is_image,
                                '$profiles'=>$profiles,
                                'reports'=>$reports]);
        
    }
}
