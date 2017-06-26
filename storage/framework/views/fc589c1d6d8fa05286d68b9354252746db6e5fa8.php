<div class="form-group">
   	<div class="col-md-2 control-label">
		<?php echo Form::label('name','Nazwa drużyny:'); ?>

   	</div>
    <div class="col-md-8">
    	<?php echo Form::text('name',null, ['class'=>'form-control']); ?>

    </div>
</div>
<div class="form-group">
   	<div class="col-md-2 control-label">
		<?php echo Form::label('description','Opis drużyny:'); ?>

   	</div>
    <div class="col-md-8">
    	<?php echo Form::textarea('description',null, ['rows'=>'10','class'=>'form-control']); ?>

    </div>
</div>
<div class="form-group">
   	<div class="col-md-2 control-label">
		<?php echo Form::label('embed', 'Link do wideo:'); ?>

   	</div>
    <div class="col-md-8">
    	<?php echo Form::text('embed',null, ['class'=>'form-control']); ?>

    </div>
</div>
<div class="form-group">
   	<div class="col-md-2 control-label">
		<?php echo Form::label('embed_desc','Opis wideo drużyny:'); ?>

   	</div>
    <div class="col-md-8">
    	<?php echo Form::textarea('embed_desc',null, ['rows'=>'5', 'class'=>'form-control']); ?>

    </div>
</div>
<div class="form-group">
    <div class="col-md-10 col-md-offset-2">
    	<?php echo Form::submit($buttonText, ['class'=>'btn btn-success']); ?>

      <a href="<?php echo e(action('TeamsController@index')); ?>" class="btn btn-primary">Powrót</a>
    </div>
</div>