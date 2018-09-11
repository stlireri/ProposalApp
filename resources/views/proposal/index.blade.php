@extends('layouts/master')

@section('title')
 Proposals Application
@endsection

@section('content')
  @if(count($proposal) > 0)
    @foreach ($proposal as $prop)
      <h3>{{$prop->title}}</h3>
    @endforeach
    {{$proposal->links}}
  @else
    <p>No proposals have been submitted here yet! </p>
  @endif
@endsection
