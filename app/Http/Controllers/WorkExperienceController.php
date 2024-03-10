<?php

namespace App\Http\Controllers;
    
use App\Models\Profile;
use Illuminate\Http\Request;
use App\Models\WorkExperience;

  class WorkExperienceController extends Controller
  {
      public function index()
      {    
        $profile = Profile::first();
          return view('layouts.app',compact('profile'));
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
        // $workExperience->employee_here = $request->input('employee_here', false); // Default to false if not provided
        if ($request->has('employee_here')) {
            // If the key exists, set the value of $employee_here to true if it's 'true', otherwise false
            $employee_here = $request->employee_here === 'true';
        } else {
            // If the key doesn't exist, set it to false
            $employee_here = false;
        }
        
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

    public function edit($id)
{
    $workExperience = WorkExperience::findOrFail($id);
    return view('workExp.edit', compact('workExperience'));
}

public function update(Request $request, $id)
{
    $workExperience = WorkExperience::findOrFail($id);
    // Update work experience attributes based on form inputs
    $workExperience->update([
        'company_name' => $request->input('company_name'),
        'title' => $request->input('title'),
        $workExperience->city = $request->input('city'),
        $workExperience->software_usage = $request->input('software_usage'),
        $workExperience->start_date = $request->input('start_date'),
        $workExperience->end_date = $request->input('end_date'),
        // Update other attributes similarly
    ]);
    // Redirect back or to another page
}

public function destroy($id)
{
    $workExperience = WorkExperience::findOrFail($id);
    $workExperience->delete();
    // Redirect back or to another page
    return redirect()->back();
}
  }
