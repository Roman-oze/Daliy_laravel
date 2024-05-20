<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    public function data()
    {

        $data['veri']=User::get();
        return view('data',$data);



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
          $data['password']=$request->password;

          DB::table('users')->insert($data);

          return redirect('info');


          // // DB::table('students')->insert($data);

          // $students = Student::all();
          //     echo "<pre>";
          //     print_r($students->toArray());

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data['student']=User::get()->where('student_id',$id)->first();
         return view('form.show',$data);
    }

    public function edit(string $id)
    {
       $data['student']=User::get()->where('student_id',$id)->first();
       return view('form.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['gender']=$request->gender;
        $data['address']=$request->address;
        $data['password']=$request->password;

        User::where('student_id',$id)->update($data);

        return redirect('info');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::table('users')->where('student_id',$id)->delete();

        return redirect('info');
    }



}
