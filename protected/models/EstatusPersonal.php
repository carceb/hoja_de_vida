<?php

/**
 * This is the model class for table "estatus_personal".
 *
 * The followings are the available columns in table 'estatus_personal':
 * @property integer $estatus_personal_id
 * @property string $nombre_estatus_personal
 *
 * The followings are the available model relations:
 * @property Personal[] $personals
 */
class EstatusPersonal extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return EstatusPersonal the static model class
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
		return 'estatus_personal';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_estatus_personal', 'required'),
			array('nombre_estatus_personal', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('estatus_personal_id, nombre_estatus_personal', 'safe', 'on'=>'search'),
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
			'personals' => array(self::HAS_MANY, 'Personal', 'estatus_personal_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'estatus_personal_id' => 'Estatus Personal',
			'nombre_estatus_personal' => 'Nombre Estatus Personal',
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

		$criteria->compare('estatus_personal_id',$this->estatus_personal_id);
		$criteria->compare('nombre_estatus_personal',$this->nombre_estatus_personal,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}