<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Exception;

//models
use App\Models\CompanyJobs;
use App\Models\Company;
use App\Models\User;
use App\Models\Country;
use App\Models\States;
use App\Models\City;
use App\Models\JobsOccupation;
use App\Models\JobsType;
use App\Models\JobsCategory;
use App\Models\JobsExperience;
use App\Models\CompanyJobsVerifiedStatus;
use App\Models\Degrees;
use App\Models\EmployeeLevel;
use App\Models\JobsStatus;

class JobsController extends Controller
{
    protected $title = 'Jobs';
    protected $view = 'jobs.';

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request) {
        $jobs = CompanyJobs::orderByDesc('company_jobs_id')->get();

        $query = $request->query();
        if(!empty($query)){
            $jobs = CompanyJobs::where($query)->get();
        }

        $data = [
            'title' => $this->title,
            'breadcrumb' => ['Company'],
            'jobs' => $jobs
        ];
        return view( $this->view.'index', $data);
    }

    public function create() {
        $data = [
            'company' => Company::all(),
            'country' => Country::all(),
            'jobs_occupation' => JobsOccupation::all(),
            'jobs_type' => JobsType::all(),
            'jobs_category' => JobsCategory::all(),
            'jobs_experience' => JobsExperience::all(),
            'jobs_status' => JobsStatus::all(),
            'degrees' => Degrees::all(),
            'employee_level' => EmployeeLevel::all(),
            'title' => $this->title,
            'breadcrumb' => ['Company','Create']
        ];
        return view( $this->view.'create', $data);
    }

    public function store(Request $request) {
        $input = $request->validate([
            'company_id' => 'required',
            'country_id' => 'nullable',
            'states_id' => 'nullable',
            'city_id' => 'nullable',
            'company_jobs_postal_code' => 'nullable',
            'company_jobs_address' => 'nullable',
            'company_jobs_email' => 'required|email',
            'company_jobs_phone' => 'nullable',
            'company_jobs_position' => 'nullable',
            'jobs_occupation_id' => 'required',
            'company_jobs_person_needed' => 'nullable',
            'jobs_type_id' => 'required',
            'jobs_category_id' => 'required',
            'jobs_experience_id' => 'required',
            'degrees_id' => 'required',
            'employee_level_id' => 'required',
            'company_jobs_remote' => 'required',
            'company_jobs_description' => 'nullable',
            'company_jobs_salary_hide' => 'required',
            'company_jobs_salary_range' => 'required',
            'company_jobs_salary_min' => 'nullable',
            'company_jobs_salary_max' => 'nullable',
            'jobs_status_id' => 'nullable',
        ]);
        $data = $input;

        // print_r($data); die();
        $jobs = new CompanyJobs;
        try {
            $jobs->create($data);
        } catch (Exception $e) {
            $message = $e->getMessage();
            die('Exception Message: '. $message);
        }

        return redirect('jobs')->with([
            'message'=>'New job has been posted!',
            'alert-type'=>'success'
        ]);
    }

    public function view($id) {
        $jobs = CompanyJobs::findOrFail($id);
        // dd($company->toArray());
        $data = [
            'company' => Company::all(),
            'country' => Country::all(),
            'states' => States::where('country_id', $jobs->country_id)->get(),
            'city' => City::where('city_state_id', $jobs->states_id)->get(),
            'jobs_occupation' => JobsOccupation::all(),
            'jobs_type' => JobsType::all(),
            'jobs_category' => JobsCategory::all(),
            'jobs_experience' => JobsExperience::all(),
            'jobs_status' => JobsStatus::all(),
            'verified' => CompanyJobsVerifiedStatus::all(),
            'degrees' => Degrees::all(),
            'employee_level' => EmployeeLevel::all(),
            'jobs' => $jobs,
            'title' => $this->title,
            'breadcrumb' => ['Company','View']
        ];
        return view( $this->view.'view', $data);
    }

    public function update(Request $request, $id) {
        $jobs = CompanyJobs::findOrFail($id);
        $input = $request->validate([
            'company_id' => 'required',
            'country_id' => 'nullable',
            'states_id' => 'nullable',
            'city_id' => 'nullable',
            'company_jobs_postal_code' => 'nullable',
            'company_jobs_address' => 'nullable',
            'company_jobs_email' => 'required|email',
            'company_jobs_phone' => 'nullable',
            'company_jobs_position' => 'nullable',
            'jobs_occupation_id' => 'required',
            'company_jobs_person_needed' => 'nullable',
            'jobs_type_id' => 'required',
            'jobs_category_id' => 'required',
            'jobs_experience_id' => 'required',
            'degrees_id' => 'required',
            'employee_level_id' => 'required',
            'company_jobs_remote' => 'required',
            'company_jobs_description' => 'nullable',
            'company_jobs_salary_hide' => 'required',
            'company_jobs_salary_range' => 'required',
            'company_jobs_salary_min' => 'nullable',
            'company_jobs_salary_max' => 'nullable',
            'jobs_status_id' => 'nullable',
            'company_jobs_verified_status_id' => 'nullable',
        ]);
        $data = $input;
        // print_r($data); die();
        try {
            $jobs->update($data);
        } catch (Exception $e) {
            $message = $e->getMessage();
            die('Exception Message: '. $message);
        }

        return redirect('jobs')->with([
            'message'=>'Job has been updated!',
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

