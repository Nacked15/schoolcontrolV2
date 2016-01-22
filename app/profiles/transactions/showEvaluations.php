<?php  
	$alumno = $_GET['alumno'];
	$curso = $_GET['curso'];
?>
<div class="row navbar-example">
	<ul class="nav nav-tabs nav-pills nav-justified vw" role="tablist" id="myTab">
		<input id="thisAlumno" type="hidden" class="hidden" disabled="true" value="<?= $alumno;?>">
		<input id="thisCurso" type="hidden" class="hidden" disabled="true" value="<?= $curso;?>">
		<li role="presentation" class="active"><a href="#personal" aria-controls="personal" role="tab" data-toggle="tab">EVALUACIONES DEL ALUMNO</a></li>
	</ul>
	<div class="tab-content ">
		<div role="tabpanel" class="row tab-pane fade in active" id="personal">
			<div class="col-sm-12">
				<div class="well" id="dataEval">
					
				</div>
			</div>
		</div>
	</div>
</div>