<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkExperience;

class WorkExperienceController extends Controller
{
    function index (){
      return view('layouts.app');

    }

    public function store(Request $request){
      $workExp = new WorkExperience ;
      $workExp->profile_id=1;
      $workExp->company_name = $request->input('company_name');
      $workExp->title = $request->input('title');
      $workExp->city = $request->input('city');
      $workExp->software_usage= $request->input('software_usage');
      $workExp->start_date = $request->input('start_date');
      $workExp->end_date = $request->input('end_date');
      $workExp->employee_here= $request->input('employee_here');
      $workExp->describe= $request->input('describe');
      $workExp->resume= $request->input('resume');
      
      $workExp->save();
      return redirect()->back()->with('success', 'Product created successfully!');

    }
}
