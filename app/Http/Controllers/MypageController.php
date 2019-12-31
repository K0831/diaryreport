<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Profile;
use App\Report;
use DB;

class MypageController extends Controller
{
    public function index(){
        $data=[];
        
        if(Auth::check()){
        $user = Auth::user();
        $profiles  = $user->profiles()->orderBy('id','desc')->first();
        // $profiles = DB::table('profiles')->orderBy('id','desc')->first();
        $reports = $user->reports()->orderBy('id','desc')->first();
        // $reports = DB::table('reports')->orderBy('id','desc')->get();
        
        $is_image = false;
            if (Storage::disk('local')->exists('public/profile_images/' . Auth::id() . '.jpg')) {
                 $is_image = true;
            }
            
        $data = [ 'profiles'=>$profiles,
                  'is_image'=>$is_image,
                  'reports'=>$reports,];
        }
        
        return view('welcome',$data);
        
    }
}
