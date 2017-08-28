<?php 
$this->breadcrumbs=array(
	'Empleado'=>array('index'),
	$model->personal_id,
);

$this->menu=array(
	array('label'=>'Listar Empleados', 'url'=>array('index')),
	array('label'=>'Crear Empleado', 'url'=>array('create')),
	array('label'=>'Modificar Empleado', 'url'=>array('update', 'id'=>$model->personal_id)),
	array('label'=>'Borrar Empleado', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->personal_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Empleado', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->nombre_personal . " "  . $model->primer_apellido ; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'personal_id',
		'cedula',
		'sexo.nombre_sexo',
		'nombre_personal',
		'segundo_nombre',
		'primer_apellido',
		'segundo_apellido',
		'estadoCivil.nombre_estado_civil',
		'fecha_nacimiento',
		'lugar_nacimiento',
		'ciudad_domicilio',
		'estado.nombre_estado',
		'direccion',
		'telefono_habitacion',
		'celular',
		'correo_electronico',
		'cargo.nombre_cargo',
		'codigoAdministrativo.nombre_division',
		'tallaCamisa.nombre_talla',
		'fecha_ingreso',
                'estatusPersonal.nombre_estatus_personal',
	),
)); ?>
