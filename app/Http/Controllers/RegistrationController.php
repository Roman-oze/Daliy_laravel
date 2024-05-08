<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function form()
    {
    return view('form');
    }
    public function course()
    {
    return view('course');
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
            echo "<pre>";
            print_r($request->all());

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
