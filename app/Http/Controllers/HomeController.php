<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index()
    {
       return view(view: 'home.test');

    }
    public function aboutus()
    {
        return view(view: 'home.about');

    }
    public function login()  //*tmm*//
    {
        return view('admin.login');

    }

    public function logincheck(Request $request)
    {

        //*$method = $request->method();

        if ($request->isMethod('post'))
        {
        $credentials = $request->only('email','password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
        else
        {
            return view('admin.login');

        }


}

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


    public function test($id,$name)
    {
        $data['$id']=$id;
        $data['name']=$name;

        return view('Home.test',["id"=>$id,$data]);
      /*echo "İd number:",$id;
        echo "<br>Name:",$name;

        for($i=1;$i<=$id;$i++){
            echo"<br>$i-$name";

        }*/
    }
}
