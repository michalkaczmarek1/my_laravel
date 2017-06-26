<?php $__env->startSection('content'); ?>

	<div class="row">
    	<div class="col-md-8 col-md-offset-2">
            <div class="create-team col-md-12">


            <h2>Dodaj drużynę</h2>
            <!-- Formularz -->
            	
            		<?php echo Form::open(['url'=>'teams','class'=>'form-horizontal']); ?>

            		
                       <?php echo $__env->make('teams.form_errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
                       <?php echo $__env->make('teams.form', ['buttonText'=>'Dodaj artykuł'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;

                    <?php echo Form::close(); ?>

            </div>
        </div>
	</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>