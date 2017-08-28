<?php
$this->breadcrumbs=array(
	'Grupo Familiar',
);

$this->menu=array(
	array('label'=>'Crear Familiar', 'url'=>array('create')),
	array('label'=>'Administar Familiar', 'url'=>array('admin')),
);
?>

<h1>Grupo Familiar</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
