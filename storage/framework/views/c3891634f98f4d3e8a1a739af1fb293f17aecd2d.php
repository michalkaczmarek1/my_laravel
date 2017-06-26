<?php $__env->startSection('content'); ?>

	<div class="row">
	    <div class="col-md-8 col-md-offset-2">
	        <div class="card">
	            <div class="edit col-md-12">

	            <h2>Edytuj wpis</h2>
	            <!-- Formularz -->

	            		<?php echo Form::model($team, ['method'=>'PATCH', 'class'=>'form-horizontal', 'action'=>['TeamsController@update', $team->id]]); ?>


	                      <?php echo $__env->make('teams.form_errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
	                      <?php echo $__env->make('teams.form', ['buttonText'=>'Zapisz zmiany'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;

	                    <?php echo Form::close(); ?>

	            </div>
	        </div>
	    </div>
	</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>