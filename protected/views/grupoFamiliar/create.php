<?php
$this->breadcrumbs=array(
	'Grupo Familiar'=>array('index'),
	'Crear Familiar',
);

$this->menu=array(
	array('label'=>'Lista de Familiares', 'url'=>array('index')),
	array('label'=>'Administrar Familiares', 'url'=>array('admin')),
);
?>

<h1>Crear Familiar</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>