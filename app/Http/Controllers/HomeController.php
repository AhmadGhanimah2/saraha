<?php

namespace App\Http\Controllers;
use App\messages;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

         //get message for current login user
        $messages=messages::where('user_id',Auth::user()->id)->get();
        return view('homepage',compact('messages'));
    }

//    public function show($id){
//        $user= user::findOrfail($id);
//        return view('homepage', compact('user'));
//    }

    public function UserProfile($id){
        $user= user::findOrfail($id);
        return view('user-profile' ,compact('user'));
    }
public function SendMesseges(Request $request ){

        $message=new messages();
        $message->user_id=$request->user_id;
        $message->message=$request->send;
        $message->save();

    return redirect(route('home.user-profile',$request->user_id));

}
}
