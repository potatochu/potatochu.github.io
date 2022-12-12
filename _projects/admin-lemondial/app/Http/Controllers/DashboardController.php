<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

//models
use App\Models\User;

class DashboardController extends Controller
{
    protected $title = 'Dashboard';
    protected $view = 'dashboard.';

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $data = [
            'title' => 'Dashboard',
            'page' => 'home'
        ];
        return view( $this->view.'index', $data);
    }

    public function scouting() {
        $data = [
            'title' => 'Talent Scouting',
            'page' => 'dashboard'
        ];
        return view( $this->view.'scouting', $data);
    }
}
