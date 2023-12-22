<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; 
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('layouts.index');
    }

    /*
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    
    {
        //
        $request->validate([
            'fullname' => 'required|min:3',
            'location' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required',
            'type' => 'required',
 
            
        ]);
        //instantiate the user class

        $user = User::create([
            'fullname' => $request->input('fullname'),
            'location' => $request->input('location'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'password' => Hash::make($request->input('password')),
            'type' => $request-> input('type'),

            
        ]);

        Auth::login($user);
        return redirect("/");


    }

    


    public function logout(Request $request) : RedirectResponse
    {
        Auth::logout();
        return redirect("/");
        //
        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function showregister()
    {
        //
    
    return view('layouts.user_reg');

        
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
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

    public function display_login()
    {
        //
        return view('layouts.donor_login');
        
    }
    public function login(Request $request)
    {

    
      
        //
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $credentials = $request->only( "email", "password" );

      
            if (Auth::attempt($credentials)) {

    
              
                $request->session()->regenerate();
    

                $type= Auth::user()->type; 

             

                if($type == 'Donor'){
                    return redirect('/orphan');
                }elseif($type == 'Orphanage'){

                    $donor_list = 
        DB::select('SELECT transaction.amount, transaction.email, users.fullname FROM transaction JOIN users ON transaction.email = users.email');


       // dd($donor_list);

        return view ('layouts.donation_list',  [
            'donor_list' => $donor_list
        ]);
                // return redirect('/donate');
                }
            }

            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
    
           
           
          
        
    }
    
}

