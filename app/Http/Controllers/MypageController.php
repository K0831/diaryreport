<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Report;

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
        $plans = $user->plans()->orderBy('id','desc')->first();
        
        $dt = new Carbon();
        // $is_image = false;
        //     if (Storage::disk('local')->exists('public/profile_images/' . Auth::id() . '.jpg')) {
        //          $is_image = true;
        //     }
        //                  created_atが今日作成されたフィールドを取得　timeカラムの合計を取得
        $today_times = $user->reports()->whereDate('created_at', Carbon::today())->sum("time");
        $lastmonth_times = $user->reports()->whereMonth('created_at',Carbon::now()->subMonth())->sum("time");
        $month_times = $user->reports()->whereMonth('created_at',Carbon::now()->month)->sum("time");
        $total_times = $user->reports()->sum("time");
        
        $days_count = $dt::now()->daysInMonth;
        $done_times = $user->reports()->whereMonth('created_at',Carbon::now()->month)->select("time");
        $goal_times = $user->plans()->select('mon_t','tue_t','wed_t','thu_t','fri_t','sat_t','sun_t');
        
        $data = [ 'profiles'=>$profiles,
                  'plans'=>$plans,
                  'reports'=>$reports,
                  'dt'=>$dt,
                  'today_times'=>$today_times,
                  'lastmonth_times'=>$lastmonth_times,
                  'month_times'=>$month_times,
                  'total_times'=>$total_times,
                  'done_times'=>$done_times,
                  'goal_times'=>$goal_times,
                  'days_count'=>$days_count];
        }
        
        return view('welcome',$data);
        
    }
}
