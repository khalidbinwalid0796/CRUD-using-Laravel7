<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Image;

class StudentController extends Controller
{
	public function index(){
    	$students = DB::table('students')->get();
    	return view('student.index', compact('students'));
    }

    public function create(){
    	return view('student.create');
    }

    public function store(Request $request){

    	$data = array();
    	$data['name']=$request->name;
    	$data['roll']=$request->roll;
    	$data['phone']=$request->phone;
    	$image=$request->image;

    	if($image){
            $image_one= uniqid().'.'.$image->getClientOriginalExtension();//123123.jpg
            Image::make($image)->resize(230,300)->save('student/'.$image_one);
            //student/123123.jpg
            $data['image']='student/'.$image_one;//   student/123123.jpg
            DB::table('students')->insert($data);
    	   return redirect()->to('student/index');
		}
		//dd($data);

    } 

        public function edit($id){
     	$student=DB::table('students')->where('id',$id)->first();
    	return view('student.edit', compact('student'));   	
    }

    public function update(Request $request, $id){

    	$data = array();
    	$data['name']=$request->name;
    	$data['roll']=$request->roll;
    	$data['phone']=$request->phone;

		$old_image=$request->old_image;
		$image=$request->image;

    	if($image){

           unlink($old_image);

           $image_one= uniqid().'.'.$image->getClientOriginalExtension();
           Image::make($image)->resize(230,300)->save('student/'.$image_one);
           $data['image']='student/'.$image_one;

           DB::table('students')->where('id',$id)->update($data);
    	   return redirect()->to('student/index');
		}else{
      
            $data['image']=$old_image;  
            DB::table('students')->where('id',$id)->update($data);
            return redirect()->to('student/index');
		}
		//dd($data);
    
    }

    public function delete($id){
    	$student=DB::table('students')->where('id',$id)->first();
        $image=$student->image;
        unlink($image);
    	$student=DB::table('students')->where('id',$id)->delete();
    	return redirect()->to('student/index');
    }
}
