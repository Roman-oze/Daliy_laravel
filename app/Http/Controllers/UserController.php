<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('auth.dashboard', compact('users'));
    }


    public function logins(){
        return view('auth.login');
    }

    public function registration()
    {
     return view('auth.registration');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'password' => 'required|string|min:8|confirmed',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        //     'type' => 'required',
        //     ]);



        $fileName = time().'-itm.'.$request->file('image')->getClientOriginalExtension();
        $request->file('image')->move('faculty', $fileName);


        $data ['name'] = $request->name;
        $data ['email'] = $request->email;
        // $data ['password'] = bcrypt($request->password);
        $data ['password'] = $request->password;
        $data ['image'] =  'faculty/' . $fileName;;
        $data ['type'] = $request->type;


        DB::table('users')->insert($data);
        return redirect('logins')->with('success','Congratulations! You Account is ready');

    }

    public function loginUser( Request $request){



        $user = User::where('email',$request->input('email'))->where('password',$request->input('password'))->first();
        if($user){
            session()->put('id',$user->id);
            session()->put('type',$user->type);
            if($user->type =='student'){
                return redirect('dashboard');
            }


        }
        else{
            return redirect()->back()->with('error','Email/Password Incorrect');
        }

    }
  public function logout(){
    session()->forget('id');
    session()->forget('type');
    return redirect('logins');
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
