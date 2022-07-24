<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;
class usersController extends Controller
{
    // Register a user || Register Function start's here
    function register(Request $req ){
        // return $req;
        $user= new User;
        $user->user_id="id".rand(100000,10000000);
        $user->first_name=$req->input('first_name');
        $user->last_name=$req->input('last_name');
        $user->email=$req->input('email');
        $user->password=Crypt::encrypt($req->input('password'));
        $user->phone_number=$req->input('phone_number');
        $user->post_code=$req->input('post_code');
        $user->country=$req->input('country');
        $user->role=$req->input('role');
        $user->save();
        return redirect('login?msg=User Register Successfully');
      
    }
    // Login a User ||Login Function start here
    function login(Request $req ){
        $user=User::where('email',$req->input('email'))->get( );
        if(isset($user[0])){
            if (Crypt::decrypt($user[0]->password)==$req->input('password')) {
                echo "User Login Successfully";
            }else{
                echo "Invalid Password";
            }
        }else{
            echo "Invalid Email";
        } 
    }

    
}
