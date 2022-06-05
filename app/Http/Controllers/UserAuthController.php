<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserAuthController extends Controller
{
    public function login() {
       return view('auth.login');
    }
    public function register() {
       return view('auth.register');
    }

    public function create(Request $request) {
//        return $request->input();
    $request->validate([
       'name'=>'required',
       'email'=>'required|email|unique:users',
        'password'=>'required|min:5|max:12'
    ]);
    $user = new User;
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $query = $user->save();

        if ($query) {
            return back()->with('success', 'You have been successfuly registered');
        }else {
            return back()->with('fail', 'Something went wrong');
        }

    }
    public function check(Request $request) {
//        return $request->input();
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);

        $user = User::where('email','=', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('LoggedUser', $user->id);
                return  redirect('profile');
            }else {
                return back()->with('fail', 'Invail password');
            }
        }else {
            return back()->with('fail', 'No account found for this email');
        }
    }

    public function profile() {
        if (session()->has('LoggedUser')) {
            $user = User::where('id', '=', session('LoggedUser'))->first();
            $data = [
              'LoggedUserInfo'=>$user
            ];
        }
        return view('website.pages.home_pages');
    }

    public  function logout() {
        if (session()->has('LoggedUser')) {
            session()->pull('LoggedUser');
            return redirect('login');
        }
    }

}
