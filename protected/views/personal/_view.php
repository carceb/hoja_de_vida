<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('personal_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->personal_id), array('view', 'id'=>$data->personal_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cedula')); ?>:</b>
	<?php echo CHtml::encode($data->cedula); ?>
	<br />

       
        <b><?php echo CHtml::encode($data->getAttributeLabel('sexo_id')); ?>:</b>
        <?php echo $data->sexo->nombre_sexo; ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_personal')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_personal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('segundo_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->segundo_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('primer_apellido')); ?>:</b>
	<?php echo CHtml::encode($data->primer_apellido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('segundo_apellido')); ?>:</b>
	<?php echo CHtml::encode($data->segundo_apellido); ?>
	<br />
	
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('estado_civil')); ?>:</b>
	<?php echo CHtml::encode($data->estado_civil_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_nacimiento')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_nacimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lugar_nacimiento')); ?>:</b>
	<?php echo CHtml::encode($data->lugar_nacimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ciudad_domicilio')); ?>:</b>
	<?php echo CHtml::encode($data->ciudad_domicilio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado_id')); ?>:</b>
	<?php echo CHtml::encode($data->estado_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono_habitacion')); ?>:</b>
	<?php echo CHtml::encode($data->telefono_habitacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('celular')); ?>:</b>
	<?php echo CHtml::encode($data->celular); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('correo_electronico')); ?>:</b>
	<?php echo CHtml::encode($data->correo_electronico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cargo_id')); ?>:</b>
	<?php echo CHtml::encode($data->cargo_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo_administrativo_id')); ?>:</b>
	<?php echo CHtml::encode($data->codigo_administrativo_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('talla_camisa_id')); ?>:</b>
	<?php echo CHtml::encode($data->talla_camisa_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_ingreso')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_ingreso); ?>
	<br />

	*/ ?>

</div>