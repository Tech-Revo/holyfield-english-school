<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher\TeacherCreateRequest;
use App\Models\Localization;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminTeacherController extends Controller
{
    public function index(){
        $lang = Localization::where('user_id', auth()->user()->id)->first();
        
       return view('admin.teachers.add_teacher',compact('lang'));
    }

    public function viewTeachersIndex(){

        $teachers=Teacher::latest()->paginate(10);
        $lang = Localization::where('user_id', auth()->user()->id)->first();
        
        return view('admin.teachers.view_teachers',compact('teachers','lang'));
    }

    public function show($id){
        
        $teacher=Teacher::with('media')->find($id);
        $lang = Localization::where('user_id', auth()->user()->id)->first();

       return view('admin.teachers.view_teacher_details',compact('teacher','lang'));
        
    }

    public function store(TeacherCreateRequest $request){

        try{

            $teacher=DB::transaction(function()use($request){

                $teacher=Teacher::create([
                    'teacher_name'=>$request->teacher_name,
                    'dob'=>$request->dob,
                    'email'=>$request->email,
                    'gender'=>$request->gender,
                    'mobile_no'=>$request->mobile_no,
                    'address'=>$request->address,
                    'joining_date'=>$request->joining_date,
                    'education_qualification'=>$request->education_qualification,
                    'position'=>$request->position
                ]);

                if ($request->profile_image) {
                    $teacher->addMedia($request->profile_image)->toMediaCollection('teacher_image');
                }
                return $teacher;
                
            });
            if($teacher){
                return back()->with('success','Teacher data saved successfully!');
            }
            
        }
        catch(\Exception $e){
            return back()->with('error',$e->getMessage());
            
        }
            
        
        
    }
}