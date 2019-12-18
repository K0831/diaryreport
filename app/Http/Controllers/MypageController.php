<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Profile;

class MypageController extends Controller
{
    public function index(){
        
        $profile = Profile::orderBy('id','desc')->first();
               
        $is_image = false;
            if (Storage::disk('local')->exists('public/profile_images/' . Auth::id() . '.jpg')) {
                 $is_image = true;
            }
            
            
        
        
        return view('welcome', ['name'=>$profile->name,
                                'content'=>$profile->content,
                                'is_image'=>$is_image,]);
    }
}
