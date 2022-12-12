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
            'title' => $this->title,
            'breadcrumb' => ['Users','Create']
        ];
        return view( $this->view.'create', $data);
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

