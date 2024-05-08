<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index()
    {
     $data['students']= DB::table('students')->get();
    return view('index',$data);

    }

    public function create()
   {
    return view('form.create');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function register(Request $request)
    {


      $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required',
        'password_confirm'=>'required|same:password'
      ]);
            //  dd(DB::table('register')->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['gender']=$request->gender;
        $data['address']=$request->address;
        $data['password']=$request->password;


        return redirect('');

        // DB::table('students')->insert($data);

        // $students = Student::all();
        //     echo "<pre>";
        //     print_r($students->toArray());


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
