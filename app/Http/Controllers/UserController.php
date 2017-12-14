<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth; //importante
use Image;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|string',
            'email'=>'email|unique:users',
          ]);

          $confirmar = $request->input('password');

        if (password_verify($confirmar,auth()->user()->password) && $request->hasfile('avatar')){
            $avatar = $request->file('avatar');
            $filename = Auth::user()->name . time() . "." . $avatar->getClientOriginalExtension();
            Image::make($avatar)->fit(300,300)
            ->save(public_path("/uploads/avatars/" . $filename ));

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }

  

  
          if(password_verify($confirmar,auth()->user()->password)){
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->save();
            return view('home', array('user' => Auth::user()));
          } else {
            return view('home', array('user' => Auth::user()));
          }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



    public function updateAvatar(Request $request) {
        // if ($request->hasfile('nombre')) {
        //     $user->name = $request->nombre;
        // }
        // if ($request->hasfile('email')) {
        //     $request->validate([
        //         'email' => 'required|email|max:255|exists:users'
        //     ]);
        // }

        if ($request->hasfile('avatar')){
            $avatar = $request->file('avatar');
            $filename = Auth::user()->name . time() . "." . $avatar->getClientOriginalExtension();
            Image::make($avatar)->fit(300,300)
            ->save(public_path("/uploads/avatars/" . $filename ));

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        return view('home', array('user' => Auth::user()));
    }

    public function profile() {
        return view('welcome', array('user' => Auth::user()));
    }
}
