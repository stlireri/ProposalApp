{!! Form::open(['action' => 'ProposalController@store', 'method' => 'POST']) !!}

   <div class="form-group">
      {!! Form::label('title', 'Title') !!}
      {!! Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'enter your title']) !!}
    </div>

     <div class="form-group">
      {!! Form::label('organization_name', 'Organisation Name') !!}
      {!! Form::text('organization_name', '', ['class' => 'form-control',  'placeholder' => 'name of your organisation']) !!}
    </div>

     <div class="form-group">
      {!! Form::label('address', 'Address') !!}
      {!! Form::text('address', '', ['class' => 'form-control']) !!}
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
      {!! Form::label('submited_by', 'Submitted by:') !!}
      {!! Form::text('submited_by', '', ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('proposal_title', 'Proposal Title') !!}
      {!! Form::text('proposal_title', '', ['class' => 'form-control', 'placeholder' => 'proposal title']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('prop_summary', 'Summary') !!}
      {!! Form::textarea('prop_summary', '', ['class' => 'form-control',  'placeholder' => 'your proposal body goes here']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('prop_background', 'Background') !!}
      {!! Form::textarea('prop_background', '', ['class' => 'form-control',  'placeholder' => 'your proposal background']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('activities', 'Activities') !!}
      {!! Form::textarea('activities', '', ['class' => 'form-control',  'placeholder' => 'describe some of the activities to be caried out']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('budget', 'Budget') !!}
      {!! Form::text('budget', '', ['class' => 'form-control', 'placeholder' => 'Estimated budget ']) !!}
    </div>


    <button class="btn btn-success" type="submit"> Submit Proposal </button>

{!! Form::close() !!}