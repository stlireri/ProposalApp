@extends('layouts/master')

@section('title')
 Proposals Application
@endsection

@section('content')
  <h1>Welcome to one love</h1><br>
  <p>Join the leading proposals reviewers around the globe by submit your proposals here for instant feed back</p>
  @if(count($proposal) > 0)
    @foreach ($proposal as $prop)
      <h3>{{$prop->title}}</h3>
    @endforeach
    {{$proposal->links}}
  @else
    <p>No proposals have been submitted here yet! </p>
  @endif
  
  
  <div class="navigate">
    <a href="{{ URL::route('proposals.create') }}" , class="btn btn-lg btn-primary"> Create a Proposal </a>
  </div> 
@endsection
