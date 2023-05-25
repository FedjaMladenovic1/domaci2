<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserAuth extends Controller
{
    function userLogin(Request $req)
    {
        $data = $req->input();
        $req->session()->put('user',$data['user']);
        return redirect('/stadioni');
    }
}
