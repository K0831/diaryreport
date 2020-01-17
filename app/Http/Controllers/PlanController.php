<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Plan;

class PlanController extends Controller
{
    public function index(){
        $user = Auth::user();
        $plans = $user->plans()->orderBy('id','desc')->first();
        return view('setting.plan_index',['plans'=>$plans]);
    }
    
    public function create(){
        
        return view('plan.create');
       
    }
    
    public function edit($id){
        $plan = Plan::find($id);
        
        return view('plan.edit',['plan'=>$plan]);
    }
    
    public function store(Request $request){
        $this->validate($request,[
            'mon_t'=> 'required|integer|numeric|digits_between:1,3',
            'mon_c'=> 'required|string|max:191',
            'tue_t'=> 'required|integer|numeric|digits_between:1,3',
            'tue_c'=> 'required|string|max:191',
            'wed_t'=> 'required|integer|numeric|digits_between:1,3',
            'wed_c'=> 'required|string|max:191',
            'thu_t'=> 'required|integer|numeric|digits_between:1,3',
            'thu_c'=> 'required|string|max:191',
            'fri_t'=> 'required|integer|numeric|digits_between:1,3',
            'fri_c'=> 'required|string|max:191',
            'sat_t'=> 'required|integer|numeric|digits_between:1,3',
            'sat_c'=> 'required|string|max:191',
            'sun_t'=> 'required|integer|numeric|digits_between:1,3',
            'sun_c'=> 'required|string|max:191',
        ]);
        
        $request->user()->plans()->create([
            'mon_t'=>$request->mon_t,
            'mon_c'=>$request->mon_c,
            'tue_t'=>$request->tue_t,
            'tue_c'=>$request->tue_c,
            'wed_t'=>$request->wed_t,
            'wed_c'=>$request->wed_c,
            'thu_t'=>$request->thu_t,
            'thu_c'=>$request->thu_c,
            'fri_t'=>$request->fri_t,
            'fri_c'=>$request->fri_c,
            'sat_t'=>$request->sat_t,
            'sat_c'=>$request->sat_c,
            'sun_t'=>$request->sun_t,
            'sun_c'=>$request->sun_c,
            'user_id'=>Auth::user()->id,
        ]);
        
        $user = Auth::user();
        $plans = $user->plans->orderBy('id','desc')->first();
        
        return view('setting.plan_index',['plans'=>$plans]);
        
    }
    
    public function update(Request $request,$id){
        
        $this->validate($request,[
            'mon_t'=> 'integer|numeric|digits_between:1,3',
            'mon_c'=> 'string|max:191',
            'tue_t'=> 'integer|numeric|digits_between:1,3',
            'tue_c'=> 'string|max:191',
            'wed_t'=> 'integer|numeric|digits_between:1,3',
            'wed_c'=> 'string|max:191',
            'thu_t'=> 'integer|numeric|digits_between:1,3',
            'thu_c'=> 'string|max:191',
            'fri_t'=> 'integer|numeric|digits_between:1,3',
            'fri_c'=> 'string|max:191',
            'sat_t'=> 'integer|numeric|digits_between:1,3',
            'sat_c'=> 'string|max:191',
            'sun_t'=> 'integer|numeric|digits_between:1,3',
            'sun_c'=> 'string|max:191',
            ]);
        
        $user = Auth::user();
        $plan = $user->plans()->find($id);
        
        if(\Auth::id()=== $plan->user_id){
            $plan->mon_t = $request->mon_t;
            $plan->mon_c = $request->mon_c;
            $plan->tue_t = $request->tue_t;
            $plan->tue_c = $request->tue_c;
            $plan->wed_t = $request->wed_t;
            $plan->wed_c = $request->wed_c;
            $plan->thu_t = $request->thu_t;
            $plan->thu_c = $request->thu_c;
            $plan->fri_t = $request->fri_t;
            $plan->fri_c = $request->fri_c;
            $plan->sat_t = $request->sat_t;
            $plan->sat_c = $request->sat_c;
            $plan->sun_t = $request->sun_t;
            $plan->sun_c = $request->sun_c;
            $plan->save();
        }
        
        $plans = $user->plans()->orderBy('id','desc')->first();
        return view('setting.plan_index',['plans'=>$plans]);   
    }
    
}
