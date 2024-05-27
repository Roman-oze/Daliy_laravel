<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
class StudentController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

        public function students()
        {
           return view('form.students');

        }

        public function view()
        {
            $search = $request['search']?? "" ;

            if($search !== ""){
                Student::where('name','like',"%$search")->get();
            }
           else{
            Student::all();
           }

          $data['students'] = DB::table('students')->get();
          return view('form.view', $data);







        }

        public function create()
       {
        return view('form.create');
        }


        /**
         * Show the form for creating a new resource.
         */


        public function store(Request $request)
        {

            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'gender'=>'required',
                'address'=>'required',
                'password' => 'required',
                'password_confirm'=>'required|same:password'
              ]);


              $data['name']=$request->name;
              $data['email']=$request->email;
              $data['gender']=$request->gender;
              $data['address']=$request->address;
              $data['password']=md5($request->password);



            DB::table('students')->insert($data);

            return redirect()->route('view')->with('success','Data Inserted Successfully');
        }

        /**
         * Display the specified resource.
         */
        public function show($id)
        {
            $data['student']=Student::get()->where('student_id',$id)->first();
             return view('form.show',$data);
        }

        public function edit($id)
        {

           $data['student']=DB::table('students')->where('student_id',$id)->first();
           return view('form.edit',$data);
        }

        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, $id)
        {

            $data['name']=$request->name;
            $data['email']=$request->email;
            $data['gender']=$request->gender;
            $data['address']=$request->address;


            DB::table('students')->where('student_id',$id)->update($data);
            return redirect('view');
        }

        /**
         * Remove the specified resource from storage.
         */
        public function trash($id)
        {
            Student::onlyTrashed()->get();
            $data = compact('students');
            return view('form.trash', $data);
        }


        public function destroy($id)
        {
            DB::table('students')->where('student_id',$id)->delete();

            return redirect()->back();
        }

     public function upload(Request $request){

       $fileName = time()."-itm/". $request->file('image')->getClientOriginalExtension();
       echo $request->file('image')->storeAs('public/uploads',$fileName);


        //  echo"<pre>";
        //  print_r($fileName);
     }


}
