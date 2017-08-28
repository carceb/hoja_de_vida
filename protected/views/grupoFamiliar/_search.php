<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'grupo_familiar_id'); ?>
		<?php echo $form->textField($model,'grupo_familiar_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cedula_personal'); ?>
		<?php echo $form->textField($model,'cedula_personal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cedula_familiar'); ?>
		<?php echo $form->textField($model,'cedula_familiar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_familiar'); ?>
		<?php echo $form->textField($model,'nombre_familiar',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sexo_familiar_id'); ?>
		<?php echo $form->textField($model,'sexo_familiar_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_nacimiento_familiar'); ?>
		<?php echo $form->textField($model,'fecha_nacimiento_familiar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'parentesco_id'); ?>
		<?php echo $form->textField($model,'parentesco_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->