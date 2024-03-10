<?php

namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use App\Models\WorkExperience;

  class WorkExperienceController extends Controller
  {
      public function index()
      {
          return view('layouts.app');
      }

      public function store(Request $request)
    {
        // Validate the incoming request data if needed
        // $validatedData = $request->validate([...]);

        // Create a new instance of WorkExperience and populate its attributes
        $workExperience = new WorkExperience();
        $workExperience->profile_id = $request->input('profile_id');
        $workExperience->company_name = $request->input('company_name');
        $workExperience->title = $request->input('title');
        $workExperience->city = $request->input('city');
        $workExperience->software_usage = $request->input('software_usage');
        $workExperience->start_date = $request->input('start_date');
        $workExperience->end_date = $request->input('end_date');
        $workExperience->employee_here = $request->input('employee_here', false); // Default to false if not provided
        $workExperience->describe = $request->input('describe');

        // Handle resume upload if provided
        if ($request->hasFile('resume')) {
            $resumePath = $request->file('resume')->store('resumes');
            $workExperience->resume = $resumePath;
        }

        // Save the work experience to the database
        $workExperience->save();

        // Optionally, you can return a response or redirect
        return response()->json(['message' => 'Work experience created successfully'], 201);
    }
  }
