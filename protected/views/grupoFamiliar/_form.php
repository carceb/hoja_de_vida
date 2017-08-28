<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'grupo-familiar-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Cédula Empleado'); ?>
		<?php echo $form->textField($model,'cedula_personal'); ?>
		<?php echo $form->error($model,'cedula_personal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cédula Familiar (Si no posee cédula colocar 0)'); ?>
		<?php echo $form->textField($model,'cedula_familiar'); ?>
		<?php echo $form->error($model,'cedula_familiar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nombre Familiar'); ?>
		<?php echo $form->textField($model,'nombre_familiar',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nombre_familiar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Sexo'); ?>
               <?php echo $form->dropDownList($model,'sexo_familiar_id',CHtml::listData(Sexo::model()->findAll(),
                 'sexo_id','nombre_sexo')); ?>
		<?php echo $form->error($model,'sexo_familiar_id'); ?>
	</div>

	<div class="row">
                <?php echo CHtml::activeLabelEx($model,'Fecha de Nacimiento'); ?>
                <?php echo CHtml::activeTextField($model,'fecha_nacimiento_familiar',array("id"=>"fecha_nacimiento_familiar")); ?>
                <?php echo CHtml::image("images/calendar-button.gif","calendar",
                array("id"=>"c_button","class"=>"pointer")); ?>
                    <?php $this->widget('application.extensions.calendar.SCalendar',
                        array(
                        'inputField'=>'fecha_nacimiento_familiar',
                        'button'=>'c_button',
                        'ifFormat'=>'%Y-%m-%d',
                        'language'=>'es',
                    ));
                    ?>
		<?php echo $form->error($model,'fecha_nacimiento_familiar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parentesco_id'); ?>
               <?php echo $form->dropDownList($model,'parentesco_id',CHtml::listData(Parentesco::model()->findAll(),
                 'parentesco_id','nombre_parentesco')); ?>
		<?php echo $form->error($model,'parentesco_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->