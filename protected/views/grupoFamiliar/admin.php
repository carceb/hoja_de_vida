<?php
$this->breadcrumbs=array(
	'Grupo Familiar'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Lista de Familiares', 'url'=>array('index')),
	array('label'=>'Crear Familiar', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('grupo-familiar-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Grupo Familiar</h1>

<p>

<?php echo CHtml::link('Buqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'grupo-familiar-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'grupo_familiar_id',
		'cedula_personal',
		'cedula_familiar',
		'nombre_familiar',
		'sexo_familiar_id',
		'fecha_nacimiento_familiar',
		/*
		'parentesco_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
