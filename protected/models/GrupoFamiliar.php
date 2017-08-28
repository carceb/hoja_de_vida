<?php

/**
 * This is the model class for table "grupo_familiar".
 *
 * The followings are the available columns in table 'grupo_familiar':
 * @property integer $grupo_familiar_id
 * @property integer $cedula_personal
 * @property integer $cedula_familiare
 * @property string $nombre_familiar
 * @property integer $sexo_familiar_id
 * @property string $fecha_nacimiento_familiar
 * @property integer $parentesco_id
 *
 * The followings are the available model relations:
 * @property Personal $cedulaPersonal0
 * @property Parentesco $parentesco
 * @property Sexo $sexoFamiliar
 */
class GrupoFamiliar extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return GrupoFamiliar the static model class
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
		return 'grupo_familiar';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cedula_personal, cedula_familiar, nombre_familiar, sexo_familiar_id, fecha_nacimiento_familiar, parentesco_id', 'required'),
			array('cedula_personal, cedula_familiar, sexo_familiar_id, parentesco_id', 'numerical', 'integerOnly'=>true),
			array('nombre_familiar', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('grupo_familiar_id, cedula_personal, cedula_familiar, nombre_familiar, sexo_familiar_id, fecha_nacimiento_familiar, parentesco_id', 'safe', 'on'=>'search'),
                        array('cedula_personal', 'NoEsEmpleadoRegistrado', 'skipOnError'=>true),
                        array('cedula_familiar', 'EsEmpleadoEnGrupoFamiliar', 'skipOnError'=>true),
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
			'cedulaPersonal0' => array(self::BELONGS_TO, 'Personal', 'cedula_personal'),
			'parentesco' => array(self::BELONGS_TO, 'Parentesco', 'parentesco_id'),
			'sexoFamiliar' => array(self::BELONGS_TO, 'Sexo', 'sexo_familiar_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'grupo_familiar_id' => 'Grupo Familiar',
			'cedula_personald' => 'Cedula Personal',
			'cedula_familiar' => 'Cedula Familiar',
			'nombre_familiar' => 'Nombre Familiar',
			'sexo_familiar_id' => 'Sexo Familiar',
			'fecha_nacimiento_familiar' => 'Fecha Nacimiento Familiar',
			'parentesco_id' => 'Parentesco',
		);
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

		$criteria->compare('grupo_familiar_id',$this->grupo_familiar_id);
		$criteria->compare('cedula_personal',$this->cedula_personal);
		$criteria->compare('cedula_familiar',$this->cedula_familiar);
		$criteria->compare('nombre_familiar',$this->nombre_familiar,true);
		$criteria->compare('sexo_familiar_id',$this->sexo_familiar_id);
		$criteria->compare('fecha_nacimiento_familiar',$this->fecha_nacimiento_familiar,true);
		$criteria->compare('parentesco_id',$this->parentesco_id);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
        
        public function NoEsEmpleadoRegistrado()
        {
            $objetoProcesos = new ProcesosEmpleados();
            if($this->grupo_familiar_id == 0)
            {
                if($objetoProcesos->EsEmpleadoRegistrado($this->cedula_personal)==false)
                {
                    $this->addError('cedula_personal','Esta cédula NO está registrada a ningún empleado.');
                }
            }
        }

      
        public function EsEmpleadoEnGrupoFamiliar()
        {

            if($this->cedula_familiar !=0)
            {
                $objetoProcesos = new ProcesosEmpleados();
                if($this->grupo_familiar_id == 0)
                {
                    if($objetoProcesos->EsEmpleadoRegistrado($this->cedula_familiar)==true)
                    {
                        $this->addError('cedula_familiar','Esta cédula está registrada a un empleado.');
                    } else
                    {
                         $objetoProcesos = new ProcesosEmpleados();
                            if($this->grupo_familiar_id == 0)
                            {
                                if($objetoProcesos->EsEmpleadoEnGrupoFamiliar($this->cedula_familiar))
                                {
                                    $this->addError('cedula_familiar','Esta cédula está registrada como grupo familiar.');
                                }
                            }
                    }

                }

            }
        }
}