<?php

namespace App\Http\Controllers;

// used model
use App\User;

//used class
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        return view('admin.login');
    }

    public function signup(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'username' => 'required|string',
            'password' => 'required|string',
            'email' => 'required|email',
            'phone_number' => 'string',
        ]);

        $data = $request->input();

        $user = new User();

        if ($user->isUserExist($data['username'])) {
            return response()->json(['error' => 'username', 'message' => 'Username already exist'], 400);
        }

        $user->name = $data['name'];
        $user->username = $data['username'];
        $user->email = $data['email'];
        $user->password = md5($data['password']);
        $user->phone_number = $data['phone_number'];
        $user->user_type = 0;
        $user->save();

        return view('admin.login');
    }
}
