<?php
$this->breadcrumbs=array(
	'Grupo Familiar'=>array('index'),
	$model->grupo_familiar_id,
);

$this->menu=array(
	array('label'=>'Lista de Familiares', 'url'=>array('index')),
	array('label'=>'Agregar Familiar', 'url'=>array('create')),
	array('label'=>'Modificar Familiar', 'url'=>array('update', 'id'=>$model->grupo_familiar_id)),
	array('label'=>'Borrar Familiar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->grupo_familiar_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Familiar', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->nombre_familiar; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cedula_personal',
                'cedulaPersonal0.nombre_personal',
		'cedula_familiar',
		'nombre_familiar',
		'sexoFamiliar.nombre_sexo',
		'fecha_nacimiento_familiar',
		'parentesco.nombre_parentesco',
	),
)); ?>
