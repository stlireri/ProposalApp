<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proposal;
use App\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function admin(Proposal $proposal)
    {
        $users=auth()->user();
        $proposal = Proposal::all();           
        return view('admin.index', compact('proposal', 'users'));

    }

    public function review($id)
    {
        $users=auth()->user();
        $proposal = Proposal::find($id);
        return  view('admin.show', compact('proposal', 'users'));
    }
    public function stage1($proposal_id) 
    { 
        $proposal = Proposal::find($proposal_id);
        $proposal->stage = 'stage-1';
        $proposal->save(); 
        return back();
    }
    public function stage2($proposal_id) 
    { 
        $proposal = Proposal::find($proposal_id);
        $proposal->stage = 'stage-2';
        $proposal->save(); 
        return back();
    } public function approved($proposal_id) 
    { 
        $proposal = Proposal::find($proposal_id);
        $proposal->stage = 'approved';
        $proposal->save(); 
        return back();
    } public function rejected($proposal_id) 
    { 
        $proposal = Proposal::find($proposal_id);
        $proposal->stage = 'rejected';
        $proposal->save(); 
        return back();
    }
}
