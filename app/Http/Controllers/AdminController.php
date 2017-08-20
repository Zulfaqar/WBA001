<?php

namespace App\Http\Controllers;

//used class
use Auth;
use Session;
use Illuminate\Http\Request;

// used model
use App\User;

class AdminController extends Controller
{
    public function index()
    {
        return view('pages.admin.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $data = $request->input();

        $admin = User::query()
            ->where('username', trim($data['username']))
            ->where('user_type', 0)
            ->first();

        if (!$admin) {
            if ($request->ajax()) {
                return response()->json(['status' => 401, 'message' => 'Invalid username!'], 401);
            } else {
                return redirect('admin')->with('message', 'Invalid username!');
            }
        }

        if ($admin->password == md5($data['password'])) {

            Auth::login($admin, true);

            if ($request->ajax()) {
                $result = ['status' => 200, 'message' => 'success', 'redirect' => false];

                if ($request->session()->has('admin_data')) {
                    $result['redirect'] = 'admin/dashboard';
                }

                return response()->json($result);

            } else {
                return redirect('/admin/dashboard');
            }

        }else {

            if ($request->ajax()) {
                return response()->json(['status' => 401, 'message' => 'Invalid password!'], 401);
            } else {
                return redirect('admin')->with('message', 'Invalid password!');
            }
        }
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

        return redirect('');
    }

    public function dashboard()
    {
        $admin = Auth::user();

        print_r($admin->username);
    }
}
