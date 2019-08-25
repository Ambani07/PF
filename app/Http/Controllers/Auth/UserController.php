<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use Image;
use Auth;

class UserController extends Controller
{
        /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

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
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function index()
    {
        return view('auth.account');
    }

    public function edit(Request $request)
    {
        $user = User::find($request->id);
        
        $roles = Role::all();

        // dd($roles);

        return view('auth.edit')->with(['user' => $user, 'roles' => $roles]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|min:2',
            'surname' => 'required',
            'email' => 'required|email',
            'role_id' => 'nullable',
            'tel_no' => 'required',
            'cell_no' => 'required'
        ]);

        $user = User::find($id);
        $roles = Role::all();

        // dd($user);
        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->email = $request->input('email');
        $user->role_id = $request->input('role_id');
        $user->tel_no = $request->input('tel_no');
        $user->cell_no = $request->input('cell_no');

        $user->save();

        return redirect('/account')->with(['success' => 'Account Updated','user' => $user, 'roles' => $roles]);
    }

    public function update_avatar(Request $request){
        
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            
            $filename = time() . '.' . $avatar->getClientOriginalExtension();

            Image::make($avatar)->resize(300, 300)->save( public_path('images/avatars/' . $filename) );

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }

        return view('auth.account')->with('filename', $filename);
    }

}
