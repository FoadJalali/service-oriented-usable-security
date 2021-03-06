<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CompanyDepartment;
use App\CompanyPosition;
use App\Job;
use App\User;

class HomeController extends Controller
{
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $depts = CompanyDepartment::all();
        $positions = CompanyPosition::all();
        $jobs = Job::all();
        $users = User::all();
        return view('home', compact('depts', 'positions', 'jobs', 'users'));
    }
}
