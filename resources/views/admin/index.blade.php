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
                   
					<div class="row">
						<div class="twelve columns">
							<h5>Users Proposals</h5>
						</div>
					</div>

					<div class="row">
						<table class="twelve dtable">
						<thead>
							<tr>
								<th>Proposal Title</th>
								<th>Submitted By</th>
								<th>Submitted At</th>
								<th>Review stage</th>
							</tr>
						</thead>
						<tbody>
							@foreach($proposal as $prop)
								<tr>
									<td>{{ $prop->title }}</td>
									<td>{{ $prop->email }}</td>
									<td>{{ $prop->updated_at }}</td>
									<td>{{ $prop->stage }}</td>
									<td><a href="{{ Route('review', $prop->id)}}", class="btn btn-lg btn-info">View</a></td>
								</tr>
							@endforeach
						</tbody>
						</table>
					</div>
									</div>
            </div>
        </div>
    </div>
</div>
@endsection
