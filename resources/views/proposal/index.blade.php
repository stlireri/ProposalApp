@extends('layouts/app')
@extends('layouts/master')

@section('title')
 Proposals Application
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        
          <h3>My Proposals</h3>
          <hr>
          @if(count($proposal) > 0)
            @foreach ($proposal as $prop)
              <h3>{{$prop->title}}</h3>
              <a href="{{ route('proposals.show', $prop->id)}}", class="btn btn-sm btn-info">View</a>
             @endforeach
            @else
              <p>No proposals have been submitted here yet! </p>
          @endif
        </div>
      </div>
    </div>
</div>
@endsection
