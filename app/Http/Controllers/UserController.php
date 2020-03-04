<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{

    public function index(){
        return view('users');
    }
    
    public function create(){
        $user = new User();
 
        $user->nom = request('nom'); 
        $user->username = request('username');
        $user->password = request('password');
 
        $user->save();

        // return redirect('/users');
        return "Bien enregistré !";
    }

    public function connect(){
        if( (request('username') == "alassane") && (request('password') == "passer")){
          return redirect('absence');
        }
    
        if((request('username') == "rp") && (request('password') == "passer")){
            return redirect('rp');
        }
        if((request('username') != "rp") || (request('password') != "passer")){
            return redirect('loginblem');
        }
        
    }
}
