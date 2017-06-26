<div class="form-group">
   	<div class="col-md-2 control-label">
		{!! Form::label('name','Nazwa drużyny:') !!}
   	</div>
    <div class="col-md-8">
    	{!! Form::text('name',null, ['class'=>'form-control']) !!}
    </div>
</div>
<div class="form-group">
   	<div class="col-md-2 control-label">
		{!! Form::label('description','Opis drużyny:') !!}
   	</div>
    <div class="col-md-8">
    	{!! Form::textarea('description',null, ['rows'=>'10','class'=>'form-control']) !!}
    </div>
</div>
<div class="form-group">
   	<div class="col-md-2 control-label">
		{!! Form::label('embed', 'Link do wideo:') !!}
   	</div>
    <div class="col-md-8">
    	{!! Form::text('embed',null, ['class'=>'form-control']) !!}
    </div>
</div>
<div class="form-group">
   	<div class="col-md-2 control-label">
		{!! Form::label('embed_desc','Opis wideo drużyny:') !!}
   	</div>
    <div class="col-md-8">
    	{!! Form::textarea('embed_desc',null, ['rows'=>'5', 'class'=>'form-control']) !!}
    </div>
</div>
<div class="form-group">
    <div class="col-md-10 col-md-offset-2">
    	{!! Form::submit($buttonText, ['class'=>'btn btn-success']) !!}
      <a href="{{ action('TeamsController@index')}}" class="btn btn-primary">Powrót</a>
    </div>
</div>