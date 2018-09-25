@extends('layouts/app')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-6" >
        <div class="card">
          <table cellpadding="4">
              <tbody>
              <tr  class="separator">
                  
                <th>Proposal Title</th>
                <td>{{ $proposal->title }}</td>
              </tr>
              <tr>
                <th>Submitted By</th>
                <td>{{ $proposal->email }}</td>
              </tr>
              <tr>
                <th>Phone</th>
                <td>{{ $proposal->phone}}</td>
              </tr>
              <tr >
                <th>Address</th>
                <td>{{ $proposal->address }}</td> 
              </tr>
              <tr>
                <th>Summary</th>
                <td>{{ $proposal->pro_summary}}</td>
              </tr>
              <tr>
                <th>Background Activities</th>
                <td>{{ $proposal->activities }}</td>
              </tr>
              <tr>
                <th>Proposed Budget</th>
                <td>KSH: {{ $proposal->budget }}</td> 
              </tr>
              <tr>
                <th>Submitted At</th>
                <td>{{ $proposal->updated_at }}</td>
              </tr>
            
            
              <tr>/stage-1/{proposal_id}
                  <a href="{{ Route('stage1', $proposal->id)}}" class="btn btn-sm btn-success">Accept</a>

                  @if(($proposal->stage == 'new') )
                  <button  id="move" ><a href="/stage-1/{proposal_id}" class="btn btn-sm btn-info">Move To Stage-1</a></button> 
                  <button id="moveright"> <a href="/reject/{proposal_id}" id="btn btn-sm btn-danger">Reject</a></button>
                  @elseif ($proposal->stage == 'stage-1')
                  <button  id="move"><a href="/admin/{{$proposal->id}}/stage2" id="btn btn-sm btn-info">Move To Stage-2</a></button> 
                  <button id="moveright"> <a href="/admin/{{$proposal->id}}/reject" id="btn btn-sm btn-danger">Reject</a></button>
                  @elseif ($proposal->stage == 'stage-2')
                  <button  id="move"><a href="/admin/{{$proposal->id}}/accepted" id="btn btn-sm btn-info">Accept</a></button> 
                  <button  id="moveright"><a href="/admin/{{$proposal->id}}/reject" id="btn btn-sm btn-danger">Reject</a></button> 
                  @elseif   ($proposal->stage == 'rejected')
                  <button > <a href="/admin" id="btn btn-sm btn-info">Back</a></button>
                  @else
                  <button > <a href="/admin" id="btn btn-sm btn-info">Back</a></button>
                  @endif
              </div>
              </tr>
              
            </tbody>
          </table>
        </div>
  </div>
</div>
@endsection
