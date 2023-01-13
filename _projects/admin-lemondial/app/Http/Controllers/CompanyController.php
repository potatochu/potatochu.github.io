<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Exception;

//models
use App\Models\Company;
use App\Models\User;
use App\Models\Country;
use App\Models\States;
use App\Models\City;
use App\Models\Level;
use App\Models\CompanyCategory;
use App\Models\CompanyEmployees;

class CompanyController extends Controller
{
    protected $title = 'Company';
    protected $view = 'company.';

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request) {
        $company = Company::orderByDesc('company_id')->get();

        $query = $request->query();
        if(!empty($query)){
            $company = Company::where($query)->get();
        }

        $data = [
            'title' => $this->title,
            'breadcrumb' => ['Company'],
            'companies' => $company
        ];
        return view( $this->view.'index', $data);
    }

    public function create() {
        $data = [
            'country' => Country::all(),
            'roles' => Level::all(),
            'category' => CompanyCategory::all(),
            'employees' => CompanyEmployees::all(),
            'title' => $this->title,
            'breadcrumb' => ['Company','Create']
        ];
        return view( $this->view.'create', $data);
    }

    public function store(Request $request) {
        $input = $request->validate([
            'company_category_id' => 'required',
            'company_employees_id' => 'required',
            'company_name' => 'required',
            'company_email' => 'required|email',
            'company_phone' => 'nullable',
            'company_photo' => 'nullable',
            'company_banner' => 'nullable',
            'company_pic_name' => 'nullable',
            'company_pic_email' => 'nullable',
            'company_pic_phone' => 'nullable',
            'company_nib' => 'nullable',
            'company_npwp' => 'nullable',
            'company_npwp_name' => 'nullable',
            'company_npwp_address' => 'nullable',
            'country_id' => 'nullable',
            'states_id' => 'nullable',
            'city_id' => 'nullable',
            'company_postal_code' => 'nullable',
            'company_address' => 'nullable',
            'company_description' => 'nullable',
        ]);
        $data = $input;

        if ($request->hasFile('company_photo')) {
            // dd($request->avatar);
            $fileName = time().'.'.$request->company_photo->extension();
            if(!$request->company_photo->move(public_path(env('PHOTO_PATH')), $fileName)){
                die('error upload file!');
            }
            $data['company_photo'] = $fileName;
        }

        if ($request->hasFile('company_banner')) {
            // dd($request->avatar);
            $fileName = time().'.'.$request->company_banner->extension();
            if(!$request->company_banner->move(public_path(env('BANNER_PATH')), $fileName)){
                die('error upload file!');
            }
            $data['company_banner'] = $fileName;
        }

        // print_r($data); die();
        $company = new Company;
        try {
            $company->create($data);
        } catch (Exception $e) {
            $message = $e->getMessage();
            die('Exception Message: '. $message);
        }

        return redirect('company')->with([
            'message'=>'New company has been created!',
            'alert-type'=>'success'
        ]);
    }

    public function view($id) {
        $company = Company::findOrFail($id);
        // dd($company->toArray());
        $data = [
            'country' => Country::all(),
            'states' => States::where('country_id', $company->country_id)->get(),
            'city' => City::where('city_state_id', $company->states_id)->get(),
            'roles' => Level::all(),
            'category' => CompanyCategory::all(),
            'employees' => CompanyEmployees::all(),
            'title' => $this->title,
            'company' => $company,
            'breadcrumb' => ['Company','View']
        ];
        return view( $this->view.'view', $data);
    }

    public function update(Request $request, $id) {
        $company = Company::findOrFail($id);
        $input = $request->validate([
            'company_category_id' => 'required',
            'company_employees_id' => 'required',
            'company_name' => 'required',
            'company_email' => 'required|email',
            'company_phone' => 'nullable',
            'company_photo' => 'nullable',
            'company_banner' => 'nullable',
            'company_pic_name' => 'nullable',
            'company_pic_email' => 'nullable',
            'company_pic_phone' => 'nullable',
            'company_nib' => 'nullable',
            'company_npwp' => 'nullable',
            'company_npwp_name' => 'nullable',
            'company_npwp_address' => 'nullable',
            'country_id' => 'nullable',
            'states_id' => 'nullable',
            'city_id' => 'nullable',
            'company_postal_code' => 'nullable',
            'company_address' => 'nullable',
            'company_description' => 'nullable',
            'company_verified_date' => 'nullable',
            'company_verified_description' => 'nullable',

        ]);
        $data = $input;

        if ($request->hasFile('company_photo')) {
            // dd($request->avatar);
            $fileName = time().'.'.$request->company_photo->extension();
            if(!$request->company_photo->move(public_path(env('PHOTO_PATH')), $fileName)){
                die('error upload file!');
            }
            $data['company_photo'] = $fileName;
        }

        if ($request->hasFile('company_banner')) {
            // dd($request->avatar);
            $fileName = time().'.'.$request->company_banner->extension();
            if(!$request->company_banner->move(public_path(env('BANNER_PATH')), $fileName)){
                die('error upload file!');
            }
            $data['company_banner'] = $fileName;
        }

        // print_r($data); die();
        try {
            $company->update($data);
        } catch (Exception $e) {
            $message = $e->getMessage();
            die('Exception Message: '. $message);
        }

        return redirect('company')->with([
            'message'=>'Company has been updated!',
            'alert-type'=>'success'
        ]);
    }

    public function verification(Request $request) {
        $company = Company::where('company_verified_date', null)->get();
        $data = [
            'title' => $this->title,
            'breadcrumb' => ['Company','Verification'],
            'companies' => $company
        ];
        return view( $this->view.'verification', $data);
    }

    public function delete($id) {
        $company = Company::findOrFail($id);
        try {
            $company->delete();
        } catch (Exception $e) {
            $message = $e->getMessage();
            die('Exception Message: '. $message);
        }
        return redirect('company')->with([
            'message'=>'company has been deleted!'
        ]);
    }
}

