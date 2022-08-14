<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Kwpillars;

use App\Pbpillars;

use App\Scpillars;

class AdminController extends Controller
{
    public function kwpillars(){
        return view('admin.kwpillars');
    }


    public function pbpillars(){
        return view('admin.pbpillars');
    }


    public function scpillars(){
        return view('admin.scpillars');
    }


    public function addkwpillars(Request $request){

        $data = new kwpillars;

        $data->plan_number = $request->plan;

        $data->name = $request->name;

        $data->location = $request->location;

        $data->size = $request->size;

        $data->pillar_number = $request->pillar;

        $data->eastings = $request->eastings;

        $data->northings = $request->northings;

        $data->origin = $request->origin;

        $data->height = $request->height;

        $data->remarks = $request->remarks;

        $data->save();


        return redirect()->back()->with('message', 'Record Added Successfully');
    }


    public function addpbpillars(Request $request){

        $data = new pbpillars;

        $data->plan_number = $request->plan;

        $data->name = $request->name;

        $data->location = $request->location;

        $data->size = $request->size;

        $data->pillar_number = $request->pillar;

        $data->eastings = $request->eastings;

        $data->northings = $request->northings;

        $data->origin = $request->origin;

        $data->height = $request->height;

        $data->remarks = $request->remarks;

        $data->save();


        return redirect()->back()->with('message', 'Record Added Successfully');
    }


    public function addscpillars(Request $request){

        $data = new scpillars;

        $data->plan_number = $request->plan;

        $data->name = $request->name;

        $data->location = $request->location;

        $data->size = $request->size;

        $data->pillar_number = $request->pillar;

        $data->eastings = $request->eastings;

        $data->northings = $request->northings;

        $data->origin = $request->origin;

        $data->height = $request->height;

        $data->remarks = $request->remarks;

        $data->save();


        return redirect()->back()->with('message', 'Record Added Successfully');
    }




    public function viewkwpillars(){

            $data = kwpillars::all(); 
            return view('admin.viewkwpillars', compact('data'));
        
    }


    public function viewpbpillars(){

        $data = pbpillars::all(); 
        return view('admin.viewpbpillars', compact('data'));
    
}


public function viewscpillars(){

    $data = scpillars::all(); 
    return view('admin.viewscpillars', compact('data'));

}


public function deletekwpillar($id){
    $data = kwpillars::find($id);
    $data->delete();
    return redirect()->back()->with('message', 'Record Deleted Successfully');
}



public function deletepbpillar($id){
    $data = pbpillars::find($id);
    $data->delete();
    return redirect()->back()->with('message', 'Record Deleted Successfully');
}



public function deletescpillar($id){
    $data = scpillars::find($id);
    $data->delete();
    return redirect()->back()->with('message', 'Record Deleted Successfully');
}



}
