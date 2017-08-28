<?php
$this->breadcrumbs=array(
	'Empleado'=>array('index'),
	'Agregar',
);

$this->menu=array(
	array('label'=>'Lista de Empleados', 'url'=>array('index')),
	array('label'=>'Administrar Empleados', 'url'=>array('admin')),
);
?>

<h1>Crear Empleado</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>