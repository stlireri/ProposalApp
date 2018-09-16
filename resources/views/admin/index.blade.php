@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>One Love Administration Panel</h1><br>
                    <hr>
                    <h1 class="h1">Stage One</h1>
                    <a href="#" class="btn btn-sm btn-success">Accept</a>
                    <a href="#" class="btn btn-sm btn-danger">Reject</a>
                    <hr>
                    <h1 class="h1">Stage Two</h1>
                    <a href="#" class="btn btn-sm btn-success">Accept</a>
                    <a href="#" class="btn btn-sm btn-danger">Reject</a>
                    <hr>  
                    <div class="navigate">
                        <a href="{{ URL::route('proposals.index') }}" , class="btn btn-lg btn-primary">Review submited proposals</a>
                      </div> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
