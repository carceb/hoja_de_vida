<?php
$this->breadcrumbs=array(
	'Grupo Familiars'=>array('index'),
	$model->grupo_familiar_id=>array('view','id'=>$model->grupo_familiar_id),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista de Familiares', 'url'=>array('index')),
	array('label'=>'Crear Familiar', 'url'=>array('create')),
	array('label'=>'Modificar Familiar', 'url'=>array('view', 'id'=>$model->grupo_familiar_id)),
	array('label'=>'Administrar Grupo Familiar', 'url'=>array('admin')),
);
?>

<h1>Modificar Grupo Familiar <?php echo $model->grupo_familiar_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>