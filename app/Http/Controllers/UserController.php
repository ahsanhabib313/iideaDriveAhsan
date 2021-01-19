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
class UserController extends Controller
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
        $users = DB::table('Users')
        ->get();
        return view('admin.createUser',compact('profiles', 'users'));
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
        Log::info('Success!');

        session()->flash('message', 'Success!');

        return redirect('/createUser');
    }

    /**
     * show modify user page.
     *
     * @param Request $request
     *
     * @return Redirect
     */
    public function modifyUser(Request $request, $userId)
    {
        Log::info('user_id :'  .$userId);
        $user = User::findOrFail($userId);
        return view('admin.modifyUser',compact('user'));
    }

    /**
     * modify an user.
     *
     * @param Request $request
     *
     * @return Redirect
     */
    public function postModifyUser(Request $request, $userId)
    {
        $this->validate($request, [
            'email'        => 'required|email|unique:users',
            'password'     => 'required|min:8|confirmed',
            'Username'   => 'required'
        ]);
        Log::info('params are validated');
        $user = Subscription::scope()->findOrFail($userId);
        $user_data = $request->only(['email', 'Username', 'first_name', 'last_name']);
        $user_data['password'] = Hash::make($request->get('password'));

        $user = User::create($user_data);
        Log::info('Success!');

        session()->flash('message', 'Success!');

        return redirect('/createUser');
    }
}