@extends('layouts/app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <h1 class="h1">Stage Two</h1>
      <hr>
      <div class="row">
        <table class="twelve dtable">
          <thead>
            <tr>
              <th>Proposal Title</th>
              <th>Submitted By</th>
              <th>Phone</th>
              <th>Address</th>
              <th>Summary</th>
              <th>Backgroung Activities</th>
              <th>Proposed Budget</th>
              <th>Submitted At</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>{{ $proposal->title }}</td>
              <td>{{ $proposal->email }}</td>
              <td>{{ $proposal->phone}}</td>
              <td>{{ $proposal->address }}</td> 
              <td>{{ $proposal->pro_summary}}</td>
              <td>{{ $proposal->pro_background }}</td>
              <td>{{ $proposal->activities }}</td> 
              <td>KSH: {{ $proposal->budget }}</td> 
              <td>{{ $proposal->updated_at }}</td>
              <a href="{{ Route('approved', $proposal->id)}}" class="btn btn-sm btn-success">Approved</a>
              <a href="{{ Route('rejected', $proposal->id)}}" class="btn btn-sm btn-danger">Reject</a>
            </tr>
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection