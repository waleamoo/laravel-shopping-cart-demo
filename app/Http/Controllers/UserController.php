<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // need to process the form

use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\Auth;
use Session;

class UserController extends Controller
{
    public function getSignUp(){
        return view('user.signup');
    }

    public function postSignUp(Request $request){
        // validate the form 
        $this->validate($request, [
            'email' => 'email|required|unique:users',
            'password' => 'required|min:4'
        ]);

        // if the form pass the validation test
        $user = new User([
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);
        $user->save();
        // login the user when they register 
        Auth::login($user);

         // this if statement, based on the Session url in Authenticate.php middleware, redirect a user back to wehre they cam from
         if(Session::has('oldUrl')){
            $oldUrl = Session::get('oldUrl');
            Session::forget('oldUrl');
            return redirect()->to($oldUrl);
        }


        return redirect()->route('user.profile');
    }

    public function getSignIn(){
        return view('user.signin');
    }

    public function postSignIn(Request $request){
        // validate the use credentials
        $this->validate($request, [
            'email' => 'email|required',
            'password' => 'required'
        ]);

        // attempt to login the user 
        if(Auth::attempt([
            'email' => $request->input('email'), 
            'password' => $request->input('password')
            ])){
                // this if statement, based on the Session url in Authenticate.php middleware, redirect a user back to wehre they cam from
                if(Session::has('oldUrl')){
                    $oldUrl = Session::get('oldUrl');
                    Session::forget('oldUrl');
                    return redirect()->to($oldUrl);
                }

                return redirect()->route('user.profile');
            }
            // if the authentication fails 
            return redirect()->back();
    }

    public function getProfile(){
        $orders = Auth::user()->orders;
        $orders->transform(function($order){
            $order->cart = unserialize($order->cart);
            return $order;
        });
        return view ('user.profile', ['orders' => $orders]);
    }

    // function logout the user 
    public function getLogout(){
        Auth::logout();
        return redirect()->back();
        // due to the Session oldUrl
        //return redirect()-route('user.signin');
    }
}
