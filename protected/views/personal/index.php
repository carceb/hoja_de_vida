<?php
$this->breadcrumbs=array(
	'Empleado',
);

$this->menu=array(
	array('label'=>'Crear Empleado', 'url'=>array('create')),
	array('label'=>'Administrar Empleados', 'url'=>array('admin')),
);
?>

<h1>Empleados</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
