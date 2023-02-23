<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index(){
        return view('users/login');
    }
    public function login(Request $request)
    {
        $formfields=$request->validate([
            'username'=>['required','min:3'],
            'password'=>['required','min:3'],
        ]);
       if(auth()->attempt($formfields)){
        $request->session()->regenerate();
        return redirect('/')->with('message','Successfully Login');
       }
       return back()->withErrors(['username'=>'Invalid Credentials']);
    }
    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect("/")->with('message',"Successfully Logout");
    }
    public function register(){
        return view('users.register');
    }
    public function store(Request $request){

      
        $formfields=$request->validate([
            'username'=>['required','min:3',Rule::unique('users','username')],
            'password'=>['required','min:3','confirmed'],
        ]);
        
        $formfields['password']=bcrypt($formfields['password']);

        $user=User::create($formfields);

        auth()->login($user);
        return redirect('/')->with('message','Account is created in unverified mode!');

    }
   
    public function viewProfile($username){
      return view('profile',['user'=>User::where('username','=',$username)->firstOrFail()]);
}
    public function update(Request $request,$username){
        
        $oldUserData=User::where('username','=',$username)->first();
        // $oldUserData->delete();
        // $formfields=$request->validate([
        //     'username'=>['required','min:3',Rule::unique('users,username')];
        // ]);
       $formFields=[];
        if($request->hasFile('profile')){
            
            $formFields['profile']=$request->file('profile')->store('profiles','public');
         }
        
         $oldUserData->update($formFields);
         return back();
         
    }
}
