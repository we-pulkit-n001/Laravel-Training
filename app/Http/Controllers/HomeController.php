<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Response;
use App\Http\Traits\QueryTrait;

class HomeController extends Controller
{

    use  QueryTrait;

    public function index(Request $request)
    {
        $user_data = $this->getUserDetails(50);
        dd($user_data);

        $users = User::factory()->count(5)->make();
        $branches = Branch::factory()->count(5)->make();

        return view('home', compact('users', 'branches', 'request'));

        return view('home');
    }


    public function registeredUser(Request $request)
    {
        $request->validate(
            [
                'username' => 'required',
                'email' => 'required|email',
                'password' => 'required'
            ]
        );

        Cookie::queue('name', $request->username, '10');

        session()->put('username', $request->username);
        session()->put('email', $request->email);
        session()->put('password', $request->password);

        $users = User::factory()->count(5)->make();
        $branches = Branch::factory()->count(5)->make();

        return view('home', compact('users', 'branches', 'request'));

        // $name = ['calvin', 'joyner'];
        // $value = "new";
        // echo '<pre>';
        // print_r($request->all());

        // return view('home', compact('name', 'value'));
    }

    public function googleSearch()
    {
        return redirect()->away('https://google.com');
    }

    public function setCookie(Request $request)
    {
        Cookie::queue('name', 'newnew', '1');
        return response('Cookie Created Successfully');
    }

    public function getCookie(Request $request)
    {
        $value = Cookie::get('name');
        return response("Cookie Value - $value");
    }

    public function deleteCookie(Request $request)
    {
        Cookie::queue(Cookie::forget('name'));
        return response("Cookie Deleted");
    }

    public function setSession(Request $request)
    {
        session()->put('username', 'calvin');
        session()->put('email', 'session@email.com');
        session()->put('password', 'session-pass');
        return redirect('home');
    }

    public function getSession(Request $request)
    {
        return session()->all();
    }

    public function deleteSession(Request $request)
    {
        session()->forget('username');
        session()->forget('email');
        session()->forget('password');
        return redirect('home');
    }
}
