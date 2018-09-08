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
        $proposal = Proposal::orderBy('created_at','desc')->get();
        $proposal = Proposal::orderBy('created_at','desc')->paginate(3);
       // $proposal = Proposal::paginate(4);
        return view('proposal.index')->with('proposal', $proposal);
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // $proposal = new Proposal;
        return view('proposal.create');
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
           'organization_name' => 'required',
           'address' => 'required',
           'phone' => 'required',
           'email' => 'required',
           'submited_by' => 'required',
           'pro_summary' => 'required',
           'prop_background' => 'required',
           'activities' => 'required',
           'budget' => 'required'
        ]);

       // Proposal::create($request->all());

       $proposal = new Proposal;
       //$proposal->title = $request->input('title');
       //$proposal->pro_summary = $request->input('pro_summary');
       $proposal-> save();

        return redirect()->route('proposals.show') 
                         ->with('success','Proposal created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proposal = Proposal::find($id);
        return view('proposal.show')->with('proposal', $proposal);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($proposal)
    {
        $proposal = Proposal::find($proposal);
        return redirect()->route('proposals.edit');
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
        $this->validate($request, [
            'title'   => 'required',
            'pro_summary' => 'required',
        ]);

        Proposal::find($proposal)->update($request->all());

        return redirect()->route('proposals.index')
                        ->with('success','News updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->validate($request, [
            'title'   => 'required',
            'pro_summary' => 'required',
        ]);

        Proposal::find($proposal)->update($request->all());

        return redirect()->route('proposals.index')
                        ->with('success','News updated successfully');
    }
}
