<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view("admin.layout");
    }
    public function welcome()
    {
        //
        return view("admincp.view.homes");
    }

    public function dashboard(Request $request){
        return view("admincp.view.dashboard");
    }
    /**
     * Show the form for creating a new resource.
     */
    public function register(Request $request){
        
            $request->validate([
                'email' => 'unique:users',
            ],[
                'email.unique' => 'The email address is already in use.',
            ]);
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->save();

            return redirect()->route("login_index")->with("success","Sign Up Success");
        
    }
    public function login(Request $request){

        // dd($request->all());
        if(Auth::attempt(['email'=>$request->email_log ,'password'=>$request->password_log])){
            return  redirect()->route('admin');
        }
        
        return redirect()->route('login_index')->with('error','email or password is incorrect
        ');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login_index');
    }
}
