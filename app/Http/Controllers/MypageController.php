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
        
        $reports = $user->reports()->orderBy('id','desc')->first();
        
        $plans = $user->plans()->orderBy('id','desc')->first();
        
        $dt = new Carbon();
        
        //                  created_atが今日作成されたフィールドを取得　timeカラムの合計を取得
        $today_times = $user->reports()->whereDate('created_at', Carbon::today())->sum("time");
        $lastmonth_times = $user->reports()->whereMonth('created_at',Carbon::now()->subMonth())->sum("time");
        $month_times = $user->reports()->whereMonth('created_at',Carbon::now()->month)->sum("time");
        $total_times = $user->reports()->sum("time");
        
        
        $month = Carbon::now()->month;
        $day = Carbon::now()->day;
        $day_1 = Carbon::now()->subDay()->day;
        $day_2 = Carbon::now()->subDays(2)->day;
        $day_3 = Carbon::now()->subDays(3)->day;
        $day_4 = Carbon::now()->subDays(4)->day;
        $day_5= Carbon::now()->subDays(5)->day;
        $day_6 = Carbon::now()->subDays(6)->day;
        
        $yesterday_times = $user->reports()->whereDate('created_at', Carbon::today()->subDay())->sum("time");
        $three_times = $user->reports()->whereDate('created_at', Carbon::today()->subDays(2))->sum("time");
        $four_times = $user->reports()->whereDate('created_at', Carbon::today()->subDays(3))->sum("time");
        $five_times = $user->reports()->whereDate('created_at', Carbon::today()->subDays(4))->sum("time");
        $six_times = $user->reports()->whereDate('created_at', Carbon::today()->subDays(5))->sum("time");
        $seven_times = $user->reports()->whereDate('created_at', Carbon::today()->subDays(6))->sum("time");
        
        if(isset($plans)){ 
            if(Carbon::now()->isMonday()){
            $today_p = $plans->mon_t;
            $yesterday_p = $plans->tue_t;
            $three_p = $plans->wed_t;
            $four_p = $plans->thu_t;
            $five_p = $plans->fri_t;
            $six_p = $plans->sat_t;
            $seven_p = $plans->sun_t;
        }
            elseif(Carbon::now()->isTuesday()){
            $today_p = $plans->tue_t;
            $yesterday_p = $plans->wed_t;
            $three_p = $plans->thu_t;
            $four_p = $plans->fri_t;
            $five_p = $plans->sat_t;
            $six_p = $plans->sun_t;
            $seven_p = $plans->mon_t; 
        }
            elseif(Carbon::now()->isWednesday()){
            $today_p = $plans->wed_t;
            $yesterday_p = $plans->thu_t;
            $three_p = $plans->fri_t;
            $four_p = $plans->sat_t;
            $five_p = $plans->sun_t;
            $six_p = $plans->mon_t;
            $seven_p = $plans->tue_t;
        }
            elseif(Carbon::now()->isThursday()){
            $today_p = $plans->thu_t;
            $yesterday_p = $plans->fri_t;
            $three_p = $plans->sat_t;
            $four_p = $plans->sun_t;
            $five_p = $plans->mon_t;
            $six_p = $plans->tue_t;
            $seven_p = $plans->wed_t; 
        }
            elseif(Carbon::now()->isFriday()){
            $today_p = $plans->fri_t;
            $yesterday_p = $plans->sat_t;
            $three_p = $plans->sun_t;
            $four_p = $plans->mon_t;
            $five_p = $plans->tue_t;
            $six_p = $plans->wed_t;
            $seven_p = $plans->thu_t;
        }
            elseif(Carbon::now()->isSaturday()){
            $today_p = $plans->sat_t;
            $yesterday_p = $plans->sun_t;
            $three_p = $plans->mon_t;
            $four_p = $plans->tue_t;
            $five_p = $plans->wed_t;
            $six_p = $plans->thu_t;
            $seven_p = $plans->fri_t;
        }
            elseif(Carbon::now()->isSunday()){
            $today_p = $plans->sun_t;
            $yesterday_p = $plans->mon_t;
            $three_p = $plans->tue_t;
            $four_p = $plans->wed_t;
            $five_p = $plans->thu_t;
            $six_p = $plans->fri_t;
            $seven_p = $plans->sat_t;
        }
        }
        else{
            $today_p = [];
            $yesterday_p = [];
            $three_p = [];
            $four_p = [];
            $five_p = [];
            $six_p = [];
            $seven_p =[];
        }
        
        $data = [ 'profiles'=>$profiles,
                  'plans'=>$plans,
                  'reports'=>$reports,
                  'dt'=>$dt,
                  'today_times' => $today_times,
                  'lastmonth_times' => $lastmonth_times,
                  'month_times' => $month_times,
                  'total_times' => $total_times,
                //   'done_times' => $done_times,
                //   'goal_times' => $goal_times,
                  
                  'yesterday_times'=>$yesterday_times,
                  'three_times'=>$three_times,
                  'four_times'=>$four_times,
                  'five_times'=>$five_times,
                  'six_times'=>$six_times,
                  'seven_times'=>$seven_times,
                  
                  'today_p'=> $today_p,
                  'yesterday_p'=> $yesterday_p,
                  'three_p'=> $three_p,
                  'four_p'=> $four_p,
                  'five_p'=> $five_p,
                  'six_p'=> $six_p,
                  'seven_p'=> $seven_p,
                  
                  'month'=> $month,
                  'day'=> $day,
                  'day_1'=> $day_1,
                  'day_2'=> $day_2,
                  'day_3'=> $day_3,
                  'day_4'=> $day_4,
                  'day_5'=> $day_5,
                  'day_6'=> $day_6,
                  ];
        }
        



        return view('welcome',$data);
        
    }
}