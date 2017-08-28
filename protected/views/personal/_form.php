<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'personal-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>
	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Cédula'); ?>
		<?php echo $form->textField($model,'cedula'); ?>
		<?php echo $form->error($model,'cedula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Sexo'); ?>
               <?php echo $form->dropDownList($model,'sexo_id',CHtml::listData(Sexo::model()->findAll(),
                 'sexo_id','nombre_sexo')); ?>
		<?php echo $form->error($model,'sexo_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Primer Nombre'); ?>
		<?php echo $form->textField($model,'nombre_personal',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nombre_personal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Segundo Nombre'); ?>
		<?php echo $form->textField($model,'segundo_nombre',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'segundo_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Primer Apellido'); ?>
		<?php echo $form->textField($model,'primer_apellido',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'primer_apellido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Segundo Apellido'); ?>
		<?php echo $form->textField($model,'segundo_apellido',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'segundo_apellido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Estado Civil'); ?>
               <?php echo $form->dropDownList($model,'estado_civil_id',CHtml::listData(EstadoCivil::model()->findAll(),
                 'estado_civil_id','nombre_estado_civil')); ?>
		<?php echo $form->error($model,'estado_civil_id'); ?>
	</div>

	<div class="row">
            <?php echo CHtml::activeLabelEx($model,'Fecha de Nacimiento'); ?>
            <?php echo CHtml::activeTextField($model,'fecha_nacimiento',array("id"=>"fecha_nacimiento")); ?>
            <?php echo CHtml::image("images/calendar-button.gif","calendar",
            array("id"=>"c_button","class"=>"pointer")); ?>
                <?php $this->widget('application.extensions.calendar.SCalendar',
                    array(
                    'inputField'=>'fecha_nacimiento',
                    'button'=>'c_button',
                    'ifFormat'=>'%Y-%m-%d',
                    'language'=>'es',
                ));
                ?>
       </div>

	<div class="row">
		<?php echo $form->labelEx($model,'lugar_nacimiento'); ?>
		<?php echo $form->textField($model,'lugar_nacimiento',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'lugar_nacimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ciudad_domicilio'); ?>
		<?php echo $form->textField($model,'ciudad_domicilio',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'ciudad_domicilio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Estado de Residencia'); ?>
               <?php echo $form->dropDownList($model,'estado_id',CHtml::listData(Estado::model()->findAll(),
                 'estado_id','nombre_estado')); ?>
		<?php echo $form->error($model,'estado_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono_habitacion'); ?>
		<?php echo $form->textField($model,'telefono_habitacion',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'telefono_habitacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'celular'); ?>
		<?php echo $form->textField($model,'celular',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'celular'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'correo_electronico'); ?>
		<?php echo $form->textField($model,'correo_electronico',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'correo_electronico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cargo_id'); ?>
               <?php echo $form->dropDownList($model,'cargo_id',CHtml::listData(Cargo::model()->findAll(
                array('order'=>'nombre_cargo ASC')), 'cargo_id','nombre_cargo')); ?>
		<?php echo $form->error($model,'cargo_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Gerencia/División'); ?>
                <?php echo $form->dropDownList($model,'codigo_administrativo_id',CHtml::listData(Division::model()->findAll(),
                 'codigo_administrativo_id','nombre_division')); ?>
		<?php echo $form->error($model,'codigo_administrativo_id'); ?>
	</div>
	<div class="row">
            <?php echo CHtml::activeLabelEx($model,'Fecha de Ingreso'); ?>
            <?php echo CHtml::activeTextField($model,'fecha_ingreso',array("id"=>"fecha_ingreso")); ?>
            <?php echo CHtml::image("images/calendar-button.gif","calendar",
            array("id"=>"c_button1","class"=>"pointer")); ?>
                <?php $this->widget('application.extensions.calendar.SCalendar',
                    array(
                    'inputField'=>'fecha_ingreso',
                    'button'=>'c_button1',
                    'ifFormat'=>'%Y-%m-%d',
                    'language'=>'es',
                ));
                ?>
		<?php echo $form->error($model,'fecha_ingreso'); ?>
	</div>
        
	<div class="row">
		<?php echo $form->labelEx($model,'talla_camisa_id'); ?>
               <?php echo $form->dropDownList($model,'talla_camisa_id',CHtml::listData(Talla::model()->findAll(),
                 'talla_id','nombre_talla')); ?>
		<?php echo $form->error($model,'talla_camisa_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Estatus'); ?>
               <?php echo $form->dropDownList($model,'estatus_personal_id',CHtml::listData(EstatusPersonal::model()->findAll(),
                 'estatus_personal_id','nombre_estatus_personal')); ?>
		<?php echo $form->error($model,'estatus_personal_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->