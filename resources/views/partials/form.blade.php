<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card-header"><h3>Create a Proposal</h3></div>
          <div class="card-body">

            {!! Form::open(['action' => 'ProposalController@store', 'method' => 'POST']) !!}
            {{ csrf_field() }}
              <div class="form-group">
                {!! Form::label('title', 'Title') !!}
                {!! Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'enter your proposal title']) !!}
              </div>

              <div class="form-group">
                {!! Form::label('address', 'Address') !!}
                {!! Form::text('address', '', ['class' => 'form-control', 'placeholder' => 'enter your Address']) !!}
              </div>

              <div class="form-group">
                {!! Form::label('phone', 'Phone') !!}
                {!! Form::text('phone', '', ['class' => 'form-control', 'placeholder' => 'enter your phone number']) !!}
              </div>

              <div class="form-group">
                {!! Form::label('email', 'Email') !!}
                {!! Form::text('email', '', ['class' => 'form-control',  'placeholder' => 'your email address']) !!}
              </div>
                
              <div class="form-group">
                {!! Form::label('pro_summary', 'Summary') !!}
                {!! Form::textarea('pro_summary', '', ['class' => 'form-control',  'placeholder' => 'your proposal body goes here']) !!}
              </div>
              <div class="form-group">
                {!! Form::label('pro_background', 'Background') !!}
                {!! Form::text('pro_background', '', ['class' => 'form-control',  'placeholder' => 'your proposal background']) !!}
              </div>
              <div class="form-group">
                {!! Form::label('activities', 'Activities') !!}
                {!! Form::text('activities', '', ['class' => 'form-control',  'placeholder' => 'describe some of the activities to be caried out']) !!}
              </div>
              <div class="form-group">
                {!! Form::label('budget', 'Budget') !!}
                {!! Form::text('budget', '', ['class' => 'form-control', 'placeholder' => 'Estimated budget ']) !!}
              </div>


              <button class="btn btn-success" type="submit"> Submit Proposal </button>
                </div>

            {!! Form::close() !!}
          </div>
        </div>
    </div>
  </div>
</div>