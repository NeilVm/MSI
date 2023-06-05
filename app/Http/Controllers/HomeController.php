<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{

    public function index()
    {
        if(Auth::id()){

            $usertype=Auth()->user()->usertype;

            if($usertype=='user'){

                return view('home');

            } else if($usertype=='admin'){

                $users = User::paginate();
                return view('user.index', compact('users'))
                ->with('i', (request()->input('page', 1) - 1) * $users->perPage());
            }


    }
}
}
