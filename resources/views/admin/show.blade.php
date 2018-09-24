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
            
            
              <tr>
                <td><a href="{{ Route('stage1', $proposal->id)}}" class="btn btn-sm btn-success">Accept</a></td>
              
                <td><a href="{{ Route('rejected', $proposal->id)}}" class="btn btn-sm btn-danger">Reject</a></td>
              </tr>
              
            </tbody>
          </table>
        </div>
  </div>
</div>
@endsection
