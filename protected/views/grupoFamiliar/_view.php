<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->grupo_familiar_id), array('view', 'id'=>$data->grupo_familiar_id)); ?>
        <br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('cedula_personal')); ?>:</b>
        <?php echo $data->cedulaPersonal0->cedula; ?>
	<br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('nombre_personal')); ?>:</b>
        <?php echo $data->cedulaPersonal0->nombre_personal. ' '.$data->cedulaPersonal0->primer_apellido; ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cedula_familiar')); ?>:</b>
	<?php echo CHtml::encode($data->cedula_familiar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_familiar')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_familiar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sexo_familiar_id')); ?>:</b>
        <?php echo $data->sexoFamiliar->nombre_sexo; ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_nacimiento_familiar')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_nacimiento_familiar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parentesco_id')); ?>:</b>
        <?php echo $data->parentesco->nombre_parentesco; ?>
	<br />


</div>