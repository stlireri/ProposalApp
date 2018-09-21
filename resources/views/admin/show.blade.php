<div class="row">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
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
                <td><a href="{{ Route('stage1', $proposal->id)}}" class="btn btn-sm btn-success">Accept</a></td>
              <td><a href="{{ Route('rejected', $proposal->id)}}" class="btn btn-sm btn-danger">Reject</a></td>
              </tr>
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>