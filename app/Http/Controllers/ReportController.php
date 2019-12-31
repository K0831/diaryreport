<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Report;
use DB;

class ReportController extends Controller
{
    public function index(){
        
        $user = Auth::user();
        $reports = $user->reports()->orderBy('id','desc')->get();
        return view('report.index', ['reports'=>$reports]);
        }
    
    public function create(){
        return view('report.create');  
    }
    
    
    public function store(Request $request){
      
        $this->validate($request, [
            'title' => 'required|string|max:191',
            'content' => 'required|string|max:191',
            'time' => 'required|integer|numeric|digits_between:1,3',
        ]);
        
         $request->user()->reports()->create([
            'title'=>$request->title,
            'content' => $request->content,
            'time'=>$request->time,
            'user_id'=>Auth::user()->id,
        ]);

        $user = Auth::user();
        $reports = $user->reports()->orderBy('id','desc')->get();
        
        return view('report.index',['reports'=>$reports]);
        
    }
    
    public function edit($id){
        $reports = Report::find($id);
        
            return view('report.edit',['reports'=>$reports]);
        
    }
    
    public function update(Request $request, $id){
        $this->validate($request, [
            'title' => 'string|max:191',
            'content' => 'string|max:191',
            'time' => 'integer|numeric|digits_between:1,3',
        ]);
        
        $report = Auth::user()->reports()->find($id);
        if (\Auth::id() === $report->user_id) {
            $report->title=$request->title;
            $report->content = $request->content;
            $report->time=$request->time;
            $report->save();
        }
        
        $user = Auth::user();
        $reports = $user->reports()->orderBy('id','desc')->get();
        
        return view('report.index',['reports'=>$reports]);
    }
    
    
    public function destroy($id){
        
        $report = Auth::user()->reports()->find($id);
        if (\Auth::id() === $report->user_id) {
            $report->delete();
        }
        
        return back();

    }
    
}
