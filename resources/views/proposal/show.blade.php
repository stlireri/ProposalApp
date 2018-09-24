@extends('layouts/app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
            <a href="/proposals" class="btn btn-sm btn-default">Go Back</a>
            <h1>{{$proposal->title}}</h1>
            <hr>
              <div>
                Address: {!!$proposal->address!!}<br>
                Phone: {!!$proposal->phone!!}<br>
                Email: {!!$proposal->email!!}<br>
                Summary: {!!$proposal->pro_summary!!}<br>
                Background: {!!$proposal->pro_background!!}<br>
                Activities: {!!$proposal->activities!!}<br>
                Budget: {!!$proposal->budget!!}
              </div>
            <hr>
            <small>Written on {{$proposal->created_at}}</small> 
       
        </div>
      </div>
    </div>
</div>
@endsection