<?php

namespace App\Http\Controllers;

//used class
use Validator;
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

        if ($user->is_user_exist($data['username'])) {
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

        return view('pages.admin.dashboard');
    }

    public function user()
    {
        $user = new User();
        $result = $user->get_all_user();

        return view('pages.admin.user', ['result' => $result]);
    }

    public function add_agent(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'agent_id' => 'required|string',
            'email' => 'required|email',
            'ext' => 'required|string',
            'phone_number' => 'required|string',
            'password' => 'required|string',
            'confirm_password' => 'required|string|same:password',
        ]);

        if ($validator->fails()) {
            return redirect('admin/dashboard-user')->withErrors($validator)->with('agent', true);
        }

        $data = $request->input();

        $status = 0;

        if(isset($data['status'])){
            $status = $data['status'];
        }

        $user = new User();

        if ($user->is_agent_exits($data['agent_id'])) {
            return redirect('admin/dashboard-user')->withErrors($data, 'agent_id')->with('agent', true);
        }

        $user->f_name = $data['first_name'];
        $user->l_name = $data['last_name'];
        $user->agent_id = $data['agent_id'];
        $user->email = $data['email'];
        $user->phone_number = $data['ext'] .'-'. $data['phone_number'] ;
        $user->password = md5($data['confirm_password']);
        $user->user_type = 1;

        $user->unit = $data['unit'];
        $user->floor = $data['floor'];
        $user->block = $data['block'];
        $user->address1 = $data['address1'];
        $user->address2 = $data['address2'];
        $user->zip = $data['zip'];
        $user->state = $data['state'];

        $user->status = $status;
        $user->save();

        return redirect('admin/dashboard-user');

    }

    public function add_admin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'ext' => 'required|string',
            'phone_number' => 'required|string',
            'password' => 'required|string',
            'confirm_password' => 'required|string|same:password',
        ]);

        if ($validator->fails()) {
            return redirect('admin/dashboard-user')->withErrors($validator)->with('admin', true);
        }

        $data = $request->input();

        $user = new User();

        if ($user->is_admin_exits($data['email'])) {
            return redirect('admin/dashboard-user')->withErrors($data, 'email')->with('admin', true);
        }

        $user->f_name = $data['first_name'];
        $user->l_name = $data['last_name'];
        $user->email = $data['email'];
        $user->phone_number = $data['ext'] .'-'. $data['phone_number'] ;
        $user->password = md5($data['confirm_password']);
        $user->user_type = 0;
        $user->save();

        return redirect('admin/dashboard-user');

    }
}
