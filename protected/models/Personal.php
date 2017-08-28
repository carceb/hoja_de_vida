<?php

/**
 * This is the model class for table "personal".
 *
 * The followings are the available columns in table 'personal':
 * @property integer $personal_id
 * @property integer $cedula
 * @property integer $sexo_id
 * @property string $nombre_personal
 * @property string $segundo_nombre
 * @property string $primer_apellido
 * @property string $segundo_apellido
 * @property integer $estado_civil_id
 * @property string $fecha_nacimiento
 * @property string $lugar_nacimiento
 * @property string $ciudad_domicilio
 * @property integer $estado_id
 * @property string $direccion
 * @property string $telefono_habitacion
 * @property string $celular
 * @property string $correo_electronico
 * @property integer $cargo_id
 * @property integer $codigo_administrativo_id
 * @property integer $talla_camisa_id
 * @property string $fecha_ingreso
 *
 * The followings are the available model relations:
 * @property GrupoFamiliar[] $grupoFamiliars
 * @property Cargo $cargo
 * @property Division $codigoAdministrativo
 * @property EstadoCivil $estadoCivil
 * @property Sexo $sexo
 * @property Talla $tallaCamisa
 */
class Personal extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Personal the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'personal';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cedula, sexo_id, nombre_personal, primer_apellido, estado_civil_id, fecha_nacimiento, ciudad_domicilio, estado_id, direccion, cargo_id, codigo_administrativo_id, talla_camisa_id, fecha_ingreso, estatus_personal_id, lugar_nacimiento', 'required',),
			array('cedula, sexo_id, estado_civil_id, estado_id, cargo_id, codigo_administrativo_id, talla_camisa_id', 'numerical', 'integerOnly'=>true),
			array('nombre_personal, segundo_nombre, primer_apellido, segundo_apellido', 'length', 'max'=>50),
			array('lugar_nacimiento', 'length', 'max'=>300),
			array('ciudad_domicilio, telefono_habitacion, correo_electronico', 'length', 'max'=>200),
			array('direccion', 'length', 'max'=>500),
			array('celular', 'length', 'max'=>80),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('personal_id, cedula, sexo_id, nombre_personal, segundo_nombre, primer_apellido, segundo_apellido, estado_civil_id, fecha_nacimiento, lugar_nacimiento, ciudad_domicilio, estado_id, direccion, telefono_habitacion, celular, correo_electronico, cargo_id, codigo_administrativo_id, talla_camisa_id, fecha_ingreso', 'safe', 'on'=>'search'),
                        array('cedula', 'EsEmpleadoRegistrado', 'skipOnError'=>true),
                        array('cedula', 'EsEmpleadoEnGrupoFamiliar', 'skipOnError'=>true)
                       
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'grupoFamiliars' => array(self::HAS_MANY, 'GrupoFamiliar', 'personal_id'),
			'cargo' => array(self::BELONGS_TO, 'Cargo', 'cargo_id'),
			'codigoAdministrativo' => array(self::BELONGS_TO, 'Division', 'codigo_administrativo_id'),
			'estadoCivil' => array(self::BELONGS_TO, 'EstadoCivil', 'estado_civil_id'),
			'sexo' => array(self::BELONGS_TO, 'Sexo', 'sexo_id'),
			'tallaCamisa' => array(self::BELONGS_TO, 'Talla', 'talla_camisa_id'),
                        'estatusPersonal' => array(self::BELONGS_TO, 'EstatusPersonal', 'estatus_personal_id'),
                        'estado' => array(self::BELONGS_TO, 'Estado', 'estado_id'),
		);
	}
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'personal_id' => 'Personal',
			'cedula' => 'Cedula',
			'sexo_id' => 'Sexo',
			'nombre_personal' => 'Nombre Personal',
			'segundo_nombre' => 'Segundo Nombre',
			'primer_apellido' => 'Primer Apellido',
			'segundo_apellido' => 'Segundo Apellido',
			'estado_civil_id' => 'Estado Civil',
			'fecha_nacimiento' => 'Fecha Nacimiento',
			'lugar_nacimiento' => 'Lugar Nacimiento',
			'ciudad_domicilio' => 'Ciudad Domicilio',
			'estado_id' => 'Estado',
			'direccion' => 'Direccion',
			'telefono_habitacion' => 'Telefono Habitacion',
			'celular' => 'Celular',
			'correo_electronico' => 'Correo Electronico',
			'cargo_id' => 'Cargo',
			'codigo_administrativo_id' => 'Codigo Administrativo',
			'talla_camisa_id' => 'Talla Camisa',
			'fecha_ingreso' => 'Fecha Ingreso',
                        'estatus_personal_id' => 'Estatus Personal',
		);
	}

        public function getUrl()
        {
            return Yii::app()->createUrl('personal/view', array(
            'id'=>$this->id,
            'title'=>$this->title,
            ));
        }


	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('personal_id',$this->personal_id);
		$criteria->compare('cedula',$this->cedula);
		$criteria->compare('sexo_id',$this->sexo_id);
		$criteria->compare('nombre_personal',$this->nombre_personal,true);
		$criteria->compare('segundo_nombre',$this->segundo_nombre,true);
		$criteria->compare('primer_apellido',$this->primer_apellido,true);
		$criteria->compare('segundo_apellido',$this->segundo_apellido,true);
		$criteria->compare('estado_civil_id',$this->estado_civil_id);
		$criteria->compare('fecha_nacimiento',$this->fecha_nacimiento,true);
		$criteria->compare('lugar_nacimiento',$this->lugar_nacimiento,true);
		$criteria->compare('ciudad_domicilio',$this->ciudad_domicilio,true);
		$criteria->compare('estado_id',$this->estado_id);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('telefono_habitacion',$this->telefono_habitacion,true);
		$criteria->compare('celular',$this->celular,true);
		$criteria->compare('correo_electronico',$this->correo_electronico,true);
		$criteria->compare('cargo_id',$this->cargo_id);
		$criteria->compare('codigo_administrativo_id',$this->codigo_administrativo_id);
		$criteria->compare('talla_camisa_id',$this->talla_camisa_id);
		$criteria->compare('fecha_ingreso',$this->fecha_ingreso,true);
                $criteria->compare('estatus_personal_id',$this->estatus_personal_id,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}

        public function EsEmpleadoRegistrado()
        {
            $objetoProcesos = new ProcesosEmpleados();
            if($this->personal_id == 0)
            {
                if($objetoProcesos->EsEmpleadoRegistrado($this->cedula))
                {
                    $this->addError('cedula','Esta cédula está registrada como empleado.');
                }
            }
        }
        
        public function EsEmpleadoEnGrupoFamiliar()
        {
            $objetoProcesos = new ProcesosEmpleados();
            if($objetoProcesos->EsEmpleadoEnGrupoFamiliar($this->cedula))
            {
                $this->addError('cedula','Esta cédula está registrada como grupo familiar.');
            }
        }
}