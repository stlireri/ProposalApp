@extends('layouts/app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
  <h1 class="h1">Approved Proposals</h1>
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
          @foreach ($proposal as $object)          
            <tr>
              <td>{{ $object->title }}</td>
              <td>{{ $object->email }}</td>
              <td>{{ $object->phone}}</td>
              <td>{{ $object->address }}</td> 
              <td>{{ $object->pro_summary}}</td>
              <td>{{ $object->pro_background }}</td>
              <td>{{ $object->activities }}</td> 
              <td>KSH: {{ $object->budget }}</td> 
              <td>{{ $object->updated_at }}</td>
          
            </tr>
            @endforeach
           
      </tbody>
    </table>
    <button > <a href="/admin" id="btn btn-sm btn-info">Back</a></button>
  </div>
  </div>
  </div>
</div>
@endsection