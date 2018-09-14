@extends('layouts/master')


@section('content')
<a href="/proposals" class="btn btn-default">Go Back</a>
  <h1>{{$proposal->title}}</h1>
    <div>
      {!!$proposal->pro_summary!!}
    </div>

    <a href="/proposals/$id/edit " , class="btn btn-sm btn-info">Preview </a>

  <hr>
  <small>Written on {{$proposal->created_at}}</small> 
@endsection
