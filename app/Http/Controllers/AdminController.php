<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function admin()
    {
        return view('admin/index');
    }

    public function stage_one()
    {
        return view('admin/stage_one');
    }

    public function stage_two()
    {
        return view('admin/stage_two');
    }

    public function approved()
    {
        return view('admin/approved');
    }

    public function Rejected()
    {
        return view('admin/rejected');
    }
}
