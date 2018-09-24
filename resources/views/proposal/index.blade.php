@extends('layouts/app')
@extends('layouts/master')

@section('title')
 Proposals Application
@endsection

@section('content')
  <h3>My Proposals</h3>
  <hr>
    @if(count($proposal) > 0)
      @foreach ($proposal as $prop)
        <h3>{{$prop->title}}</h3>
          <a href="{{ route('proposals.show', $prop->id)}}", class="btn btn-sm btn-success">View</a>
      @endforeach
    @else
      <p>No proposals have been submitted here yet! </p>
    @endif
@endsection
