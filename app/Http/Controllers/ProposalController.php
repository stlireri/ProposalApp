<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\EventListener\ValidateRequestListener;
use App\Proposal;

class ProposalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request)
    {
        $users=auth()->user();
        $proposal = Proposal::orderBy('created_at','desc')->get();
       
        return view('proposal.index')->with('proposal', $proposal);
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=auth()->user();
        return view('proposal.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
           'title'=> 'required',    
           'address' => 'required',
           'phone' => 'required',
           'email' => 'required',
           'pro_summary' => 'required',
           'pro_background' => 'required',
           'activities' => 'required',
           'budget' => 'required'
        ]);
      auth()->user()->proposals()->create($request->all());
     

        return redirect()->route('proposals.index') 
                         ->with('success','Proposal created successfully');
    }


    public function show($id)
    {
        $users=auth()->user();
        $proposal = Proposal::find($id);
        return view('proposal.show', compact('users', 'proposal'))->with('proposal', $proposal);
    }

   
    public function edit($id)
    {
        $proposal = Proposal::find($id);
        return redirect()->route('proposals.show');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $proposal->title=$request->get('title');
            $proposal->phone=$request->get('phone');  
            $proposal->address=$request->get('address');
            $proposal->email=$request->get('email');
            $proposal->organisation_name=$request->get('organisation_name');
            $proposal->pro_summary=$request->get('pro_summary');
            $proposal->pro_background=$request->get('pro_background');
            $proposal->activities=$request->get('activities');
            $proposal->budget=$request->get('budget');
       
        $proposal->save();

        Proposal::find($proposal)->update($request->all());

        return redirect()->route('proposals.index')
                        ->with('success','Proposal updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proposal = Proposal::findOrFail($id);
        $proposal->delete();
    
        return Redirect::route('proposals.index');      
    }

    public function rejected(Proposal $proposal)
    {

           $users=auth()->user();
           $user=$users->email;
           $proposal = Proposal::where('stage', 'rejected')->orderBy('updated_at','desc')->get();
           
           return view('admin.rejected',compact('proposal','users'));
   }
   public function stage1(Proposal $proposal)
   {
           $users=auth()->user();
           $user=$users->email;
          
           $proposal=Proposal::where('stage','stage-1')->orderBy('updated_at','desc')->get();
           
           return view('admin.stage_one',compact('proposal','users'));
   }
    public function userdrafts(Proposal $proposal)
   {
           $users=auth()->user();
           $user=$users->email;
          
           $proposal=Proposal::where('draft',1)->orderBy('updated_at','desc')->get();
           
           return view('user.user',compact('proposal','users'));
   }
   public function stage2(Proposal $proposal)
   {
           $users=auth()->user();
           $user=$users->email;
           $proposal=Proposal::where('stage','stage-2')->orderBy('updated_at','desc')->get();
           return view('admin.stage_two',compact('proposal','users'));
   }
   public function new(Proposal $proposal)
   {
           $users=auth()->user();
           $user=$users->email;
           $proposal=Proposal::where('stage','new')->orderBy('updated_at','desc')->get();
          
           return view('/admin',compact('proposal','users'));
   }
   public function approved(Proposal $proposal)
   {

           $users=auth()->user();
           $user=$users->email;
           $proposal=Proposal::where('stage','approved')->orderBy('updated_at','desc')->get();
          
           return view('admin.approved',compact('proposal','users'));
   }

}
