<?php
$this->breadcrumbs=array(
	'Empleados'=>array('index'),
	$model->personal_id=>array('view','id'=>$model->personal_id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Empleados', 'url'=>array('index')),
	array('label'=>'Crear Empleado', 'url'=>array('create')),
	array('label'=>'Modificar Empleado', 'url'=>array('view', 'id'=>$model->personal_id)),
	array('label'=>'Administrar Empleado', 'url'=>array('admin')),
);
?>

<h1>Modificar Empleado <?php echo $model->nombre_personal . ' ' . $model->primer_apellido; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>