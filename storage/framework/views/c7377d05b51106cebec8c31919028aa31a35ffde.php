<?php $__env->startSection('content'); ?>		
	
	<div class="row">
    	<div class="col-md-8 col-md-offset-2">
            <div class="create col-md-12">

				<div class="history">
	          		<h3>Historia</h3>
					<ul id="list-history">
						<li><a href="https://pl.wikipedia.org/wiki/Ekstraklasa_w_pi%C5%82ce_no%C5%BCnej" target="_blank" class="col-md-12 btn btn-danger btn-lg">Ekstraklasa</a></li>
						<li><a href="https://pl.wikipedia.org/wiki/I_liga_polska_w_pi%C5%82ce_no%C5%BCnej" target="_blank" class="col-md-12 btn btn-danger btn-lg">I liga</a></li>
						<li><a href="https://pl.wikipedia.org/wiki/Puchar_Polski_w_pi%C5%82ce_no%C5%BCnej" target="_blank" class="col-md-12 btn btn-danger btn-lg">Puchar Polski</a></li>
						<li><a href="https://pl.wikipedia.org/wiki/Reprezentacja_Polski_w_pi%C5%82ce_no%C5%BCnej_m%C4%99%C5%BCczyzn" target="_blank" class="col-md-12 btn btn-danger btn-lg">Reprezentacja</a></li>
						<li><a href="https://pl.wikipedia.org/wiki/Liga_Mistrz%C3%B3w_UEFA" target="_blank" class="col-md-12 btn btn-danger btn-lg">Liga mistrzów</a></li>
					</ul>
	            </div>
            </div>
        </div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>