<?php

namespace App\Http\Controllers;

Use App\Models\Member;
Use App\Models\Group;
Use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
   public function index(){

    return Group::with('member')->get();
   }



   public function new(Group $group){
return $group;

   }

   public function store (Request $request){

    $request->validate([
        'image' => 'required|mimes:png,jpg,jpeg,webp',
        'name' => 'required',
        'designation' => 'required',
        'fb' => 'required',
        'linked' => 'required',
        'email' => 'required',
        'phone' => 'required',
    ]);

    $fileName = time().'-itm.'.$request->file('image')->getClientOriginalExtension();
    $request->file('image')->storeAs('public/upload',$fileName);




    $data ['image'] = $fileName;
    $data ['name'] = $request->name;
    $data ['designation'] = $request->designation;
    $data ['fb'] = $request->fb;
    $data ['linked'] = $request->linked;
    $data ['email'] = $request->email;
    $data ['phone'] = $request->phone;

    DB::table('teachers')->insert($data);
    return redirect('shows');



   }

   public function create(){
   return view('upload.teacher_create');
   }
   public function logins(){
   return view('upload.login');
   }

   public function loginUser(Request $request){


    $teacher = Teacher::where('email',$request->input('email'))->where('password',$request->input('password'))->first();
    if($teacher){

        session()->put('teacher_id',$teacher->id);
        session()->put('name',$teacher->name);
        return redirect('dashboards');

   }
   else{
    return redirect()->with('error','Invalid Email or Password');

   }
   }


   public function show(){

        $teachers = DB::table('teachers')->get();
        return view('upload.teacher_view',compact('teachers'));

   }

   public function edit($id){
     $teacher = DB::table('teachers')->where('teacher_id',$id)->first();
     return view('upload.teacher_edit',compact('teacher'));

   }
   public function update(Request $request,$id){
    $request->validate([
        'image'=>'required',
        'name'=>'required',
        'designation'=>'required',
        'fb'=>'required',
        'linked'=>'required',
        'email'=>'required',
        'phone'=>'required',
        ]);


        $fileName = time().'-itm.'.$request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('public/upload',$fileName);

        $data ['image'] = $fileName;
        $data ['name'] = $request->name;
        $data ['designation'] = $request->designation;
        $data ['fb'] = $request->fb;
        $data ['linked'] = $request->linked;
        $data ['email'] = $request->email;
        $data ['phone'] = $request->phone;

        DB::table('teachers')->where('teacher_id',$id)->update($data);
        return redirect()->back();

   }


   public function destroy($id){
    DB::table('teachers')->where('teacher_id',$id)->delete();
    return redirect('show');


   }




}

