<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Tbladmin;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;

class admincontroller extends Controller
{
    public function view(Request $req)
     {
         return view('register');
     }
     public function register(Request $req)
     {
         if(isset($req->submit))
         {
              $arr=Tbladmin::create([
                    'name'=>$req->name,
                    'email'=>$req->email,
                    'password'=>$req->password,
              ]);
         }
         return redirect()->route('view');
     }
     public function login()
     {
          return view('login');
     }
     public function logindata(Request $req)
     {
             $user =Tbladmin::where('email' ,$req->email)->first();
             if($user->email == $req->email)
             {
                      $userData=Auth::attempt(['email'=>$req->email,'password'=>$req->password]);
                      if($userData)
                      {
                        //  return redirect()->route('wel');                      
                      }
                      else{
                          return redirect()->back();
                      }
             }else{
                  return redirect()->back();
             }
     }
}
