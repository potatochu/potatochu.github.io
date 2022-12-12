<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Exception;

//models
use App\Models\User;
use App\Models\Country;
use App\Models\States;
use App\Models\City;
use App\Models\Level;
use App\Models\UsersProfileVerify;
use App\Models\UsersVerifiedStatus;

class UsersController extends Controller
{
    protected $title = 'Users';
    protected $view = 'users.';

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request) {
        $user = User::orderByDesc('users_id')->get();

        $query = $request->query();
        if(!empty($query)){
            $user = User::where($query)->get();
        }

        $data = [
            'title' => $this->title,
            'breadcrumb' => ['Users'],
            'users' => $user
        ];
        return view( $this->view.'index', $data);
    }

    public function create() {
        $data = [
            'country' => Country::all(),
            'roles' => Level::all(),
            'title' => $this->title,
            'breadcrumb' => ['Users','Create']
        ];
        return view( $this->view.'create', $data);
    }

    public function store(Request $request) {
        $input = $request->validate([
            'users_full_name' => 'required',
            'users_email' => 'required|email|unique:users,users_email',
            'users_password' => 'required',
            'level_id' => 'required',
            'users_phone_number' => 'nullable',
            'users_photo' => 'nullable',
            'users_gender' => 'nullable',
            'users_salary' => 'nullable',
            'users_phone_number' => 'nullable',
            'country_id' => 'nullable',
            'states_id' => 'nullable',
            'city_id' => 'nullable',
            'users_postal_code' => 'nullable',
            'users_birthday' => 'nullable',
            'users_description' => 'nullable',
        ]);
        $data = $input;
        $data['users_password'] = Hash::make($data['users_password']);

        if ($request->hasFile('avatar')) {
            // dd($request->avatar);
            $fileName = time().'.'.$request->avatar->extension();
            if(!$request->avatar->move(public_path(env('PHOTO_PATH')), $fileName)){
                die('error upload file!');
            }
            $data['users_photo'] = $fileName;
        }

        $user = new User;
        try {
            $user->create($data);
        } catch (Exception $e) {
            $message = $e->getMessage();
            die('Exception Message: '. $message);
        }

        return redirect('user')->with([
            'message'=>'New user has been created!',
            'alert-type'=>'success'
        ]);
    }

    public function edit($id) {
        $user = User::findOrFail($id);
        $data = [
            'title' => $this->title,
            'country' => Country::all(),
            'states' => States::where('country_id', $user->country_id)->get(),
            'city' => City::where('city_state_id', $user->states_id)->get(),
            'roles' => Level::all(),
            'breadcrumb' => ['Users','Edit'],
            'user' => $user
        ];
        // dd($data['city']->toArray());
        return view($this->view.'edit', $data);
    }

    public function update(Request $request, $id) {
        $user = User::findOrFail($id);
        $input = $request->validate([
            'users_full_name' => 'required',
            'users_email' => 'required|email',
            'users_password' => 'nullable',
            'level_id' => 'required',
            'users_phone_number' => 'nullable',
            'users_photo' => 'nullable',
            'users_gender' => 'nullable',
            'users_salary' => 'nullable',
            'users_phone_number' => 'nullable',
            'country_id' => 'nullable',
            'states_id' => 'nullable',
            'city_id' => 'nullable',
            'users_postal_code' => 'nullable',
            'users_birthday' => 'nullable',
            'users_description' => 'nullable',
        ]);
        $data = $input;
        $data['users_password'] = ($data['users_password'] != '') ? Hash::make($data['users_password']) : $user->users_password;

        if ($request->hasFile('avatar')) {
            // dd($request->avatar);
            $fileName = time().'.'.$request->avatar->extension();
            if(!$request->avatar->move(public_path(env('PHOTO_PATH')), $fileName)){
                die('error upload file!');
            }
            $data['users_photo'] = $fileName;
        }
        // dd($data);
        try {
            $user->update($data);
        } catch (Exception $e) {
            $message = $e->getMessage();
            die('Exception Message: '. $message);
        }

        return redirect('user')->with([
            'message'=>'User has been updated!',
            'alert-type'=>'success'
        ]);
    }

    public function view($id) {
        $user = User::findOrFail($id);
        $data = [
            'title' => $this->title,
            'breadcrumb' => ['Users','Details'],
            'profileVerify' => UsersProfileVerify::where('users_id', $id)->first(),
            'verifyStatus' => UsersVerifiedStatus::all(),
            'user' => $user
        ];
        return view($this->view.'view', $data);
    }

    public function verification(Request $request) {
        $profile = UsersProfileVerify::where('users_verified_status_id', '2')->get();
        $data = [
            'title' => $this->title,
            'breadcrumb' => ['Users','Verification'],
            'profiles' => $profile
        ];
        return view( $this->view.'verification', $data);
    }

    public function verify(Request $request, $id) {
        $data = $request->input();
        $verify = UsersProfileVerify::where('users_id', $data['users_id'])->firstOrFail();
        if ($data['users_verified_status_id'] == '2') {
            $data['users_profile_verify_request_date'] = date('Y-m-d H:i:s');
            $data['users_profile_verify_accept_date'] = null;
        }
        if ($data['users_verified_status_id'] == '3') {
            $data['users_profile_verify_accept_date'] = date('Y-m-d H:i:s');
        }
        $return = [
            'status' => 'success',
            'message' => 'Profile verification has been updated'
        ];
        try {
            $verify->update($data);
        } catch (Exception $e) {
            $message = $e->getMessage();
            $return = [
                'status' => 'error',
                'message' => $message
            ];
        }

        return json_encode($return);

    }

    public function delete($id) {
        $user = User::findOrFail($id);
        try {
            $user->delete();
        } catch (Exception $e) {
            $message = $e->getMessage();
            die('Exception Message: '. $message);
        }
        return redirect('user')->with([
            'message'=>'User has been deleted!'
        ]);
    }
}

