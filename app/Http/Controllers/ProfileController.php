<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Dflydev\DotAccessData\Data;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index() {
        $profile = Profile::first();
        $id1 = 1;
        return view ('profile.profile',compact('profile','id1'));
    }

    public function updateInfo(Request $request){
        $data = Profile::find($request->id);
        $data->name = $request->name;
        $data->role = $request->role;
        // Update other fields as needed
        
        $data->save();
        return redirect('profile')->with('success', 'Data updated successfully');
    }

}
