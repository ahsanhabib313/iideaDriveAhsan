<?php

namespace App\Http\Controllers;

use App\Attendize\Utils;
use App\Models\Account;
use App\Models\School;
use App\Models\Student;
use App\Models\User;
use Hash;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Mail;
use Log;
use DB;
use Auth;
class CreateuserController extends Controller
{
    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
       // $this->middleware('guest');
    }
     public function createUser(Request $request)
    {
        $profiles = DB::table('profiles')
        ->get();
        return view('admin.createUser',compact('profiles'));
    }

    /**
     * Creates an user.
     *
     * @param Request $request
     *
     * @return Redirect
     */
    public function postCreateUser(Request $request)
    {
        $this->validate($request, [
            'email'        => 'required|email|unique:users',
            'password'     => 'required|min:8|confirmed',
            'Username'   => 'required',
            'profile_id'   =>'required'
        ]);
        Log::info('params are validated');
        $user_data = $request->only(['email', 'Username', 'first_name', 'last_name', 'profile_id']);
        $user_data['password'] = Hash::make($request->get('password'));

        $user = User::create($user_data);
        Log::info('Success! You can now login.');

        session()->flash('message', 'Success! You can now login.');

        return redirect('/createUser');
    }
}