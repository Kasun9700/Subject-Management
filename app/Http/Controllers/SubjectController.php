<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Subject;
use Illuminate\Http\Request;



class SubjectController extends Controller


{// Insert
    public function store(Request $request){
        $subject= new Subject;

        $subject-> subject_name =$request->subject_name;
        $subject-> subject_marks =$request->subject_marks;

       $res=  $subject-> save();
        return $res;
  
    }

//view

public function getAll(){
    $data=Subject::all();
    return response()->json($data);
    
}
   
        
// Delete

public function deleteSubject($id){

    $subject=Subject::find($id);
    $subject->delete();
    return redirect()->back();
}


public function search($id){
    $subject=Subject::find($id);
    return response()->json($subject);
}



//update 
public function updateSubject(Request $request){

    $id = $request->id;

     $data= Subject::find($id);

     $data-> subject_name =$request->subject_name;
     $data-> subject_marks =$request->subject_marks;
     $res=$data->save();

     return $res;
 }


function min(){

    $data= DB::table ('subjects')->min('subject_marks');
    return response()->json($data);    
}


function max(){

    $data= DB::table ('subjects')->max('subject_marks');
    return response()->json($data);

   }


function avg(){

     $data= DB::table ('subjects')->avg('subject_marks');
    return response()->json($data);
    
  }


function sum(){

      $data= DB::table ('subjects')->sum('subject_marks');
    return response()->json($data);


}
}

