<?php

/**
 * This is the model class for table "sexo".
 *
 * The followings are the available columns in table 'sexo':
 * @property integer $sexo_id
 * @property string $nombre_sexo
 *
 * The followings are the available model relations:
 * @property GrupoFamiliar[] $grupoFamiliars
 * @property Personal[] $personals
 */
class Sexo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Sexo the static model class
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
		return 'sexo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_sexo', 'required'),
			array('nombre_sexo', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('sexo_id, nombre_sexo', 'safe', 'on'=>'search'),
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
			'grupoFamiliars' => array(self::HAS_MANY, 'GrupoFamiliar', 'sexo_familiar_id'),
			'personals' => array(self::HAS_MANY, 'Personal', 'sexo_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'sexo_id' => 'Sexo',
			'nombre_sexo' => 'Nombre Sexo',
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

		$criteria->compare('sexo_id',$this->sexo_id);
		$criteria->compare('nombre_sexo',$this->nombre_sexo,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}