<?php

/**
 * This is the model class for table "parentesco".
 *
 * The followings are the available columns in table 'parentesco':
 * @property integer $parentesco_id
 * @property string $nombre_parentesco
 *
 * The followings are the available model relations:
 * @property GrupoFamiliar[] $grupoFamiliars
 */
class Parentesco extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Parentesco the static model class
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
		return 'parentesco';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_parentesco', 'required'),
			array('nombre_parentesco', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('parentesco_id, nombre_parentesco', 'safe', 'on'=>'search'),
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
			'grupoFamiliars' => array(self::HAS_MANY, 'GrupoFamiliar', 'parentesco_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'parentesco_id' => 'Parentesco',
			'nombre_parentesco' => 'Nombre Parentesco',
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

		$criteria->compare('parentesco_id',$this->parentesco_id);
		$criteria->compare('nombre_parentesco',$this->nombre_parentesco,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}