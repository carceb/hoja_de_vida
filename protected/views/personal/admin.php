<?php
$this->breadcrumbs=array(
	'Empleado'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listado de Empleados', 'url'=>array('index')),
	array('label'=>'Agregar Empleado', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('personal-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Personal</h1>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'personal-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'personal_id',
		'cedula',
		'sexo_id',
		'nombre_personal',
		'segundo_nombre',
		'primer_apellido',
		/*
		'segundo_apellido',
		'estado_civil_id',
		'fecha_nacimiento',
		'lugar_nacimiento',
		'ciudad_domicilio',
		'estado_id',
		'direccion',
		'telefono_habitacion',
		'celular',
		'correo_electronico',
		'cargo_id',
		'codigo_administrativo_id',
		'talla_camisa_id',
		'fecha_ingreso',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
