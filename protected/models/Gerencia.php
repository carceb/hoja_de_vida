<?php

/**
 * This is the model class for table "gerencia".
 *
 * The followings are the available columns in table 'gerencia':
 * @property integer $gerencia_id
 * @property string $nombre_gerencia
 * @property integer $unidad_adscripcion_id
 *
 * The followings are the available model relations:
 * @property Division[] $divisions
 */
class Gerencia extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Gerencia the static model class
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
		return 'gerencia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_gerencia, unidad_adscripcion_id', 'required'),
			array('unidad_adscripcion_id', 'numerical', 'integerOnly'=>true),
			array('nombre_gerencia', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('gerencia_id, nombre_gerencia, unidad_adscripcion_id', 'safe', 'on'=>'search'),
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
			'divisions' => array(self::HAS_MANY, 'Division', 'unidad_adscripcion_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'gerencia_id' => 'Gerencia',
			'nombre_gerencia' => 'Nombre Gerencia',
			'unidad_adscripcion_id' => 'Unidad Adscripcion',
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

		$criteria->compare('gerencia_id',$this->gerencia_id);
		$criteria->compare('nombre_gerencia',$this->nombre_gerencia,true);
		$criteria->compare('unidad_adscripcion_id',$this->unidad_adscripcion_id);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}