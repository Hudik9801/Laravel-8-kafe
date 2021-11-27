<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
       return view(view: 'home.test');

    }

    public function test($id,$name)
    {
        $data['$id']=$id;
        $data['name']=$name;

        return view('Home.test',["id"=>$id,'name'=>$name]);
      /*echo "İd number:",$id;
        echo "<br>Name:",$name;

        for($i=1;$i<=$id;$i++){
            echo"<br>$i-$name";

        }*/
    }
}
