<?php

/**
 * This is the model class for table "division".
 *
 * The followings are the available columns in table 'division':
 * @property integer $division_id
 * @property integer $codigo_administrativo_id
 * @property integer $unidad_adscripcion_id
 * @property string $nombre_division
 *
 * The followings are the available model relations:
 * @property Personal[] $personals
 * @property Gerencia $unidadAdscripcion
 */
class Division extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Division the static model class
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
		return 'division';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('codigo_administrativo_id, unidad_adscripcion_id, nombre_division', 'required'),
			array('codigo_administrativo_id, unidad_adscripcion_id', 'numerical', 'integerOnly'=>true),
			array('nombre_division', 'length', 'max'=>150),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('division_id, codigo_administrativo_id, unidad_adscripcion_id, nombre_division', 'safe', 'on'=>'search'),
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
			'personals' => array(self::HAS_MANY, 'Personal', 'codigo_administrativo_id'),
			'unidadAdscripcion' => array(self::BELONGS_TO, 'Gerencia', 'unidad_adscripcion_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'division_id' => 'Division',
			'codigo_administrativo_id' => 'Codigo Administrativo',
			'unidad_adscripcion_id' => 'Unidad Adscripcion',
			'nombre_division' => 'Nombre Division',
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

		$criteria->compare('division_id',$this->division_id);
		$criteria->compare('codigo_administrativo_id',$this->codigo_administrativo_id);
		$criteria->compare('unidad_adscripcion_id',$this->unidad_adscripcion_id);
		$criteria->compare('nombre_division',$this->nombre_division,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}