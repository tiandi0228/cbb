<?php

/**
 * This is the model class for table "{{users_groups}}".
 *
 * The followings are the available columns in table '{{users_groups}}':
 * @property integer $gid
 * @property string $name
 * @property string $type
 * @property string $image
 * @property integer $creditshigher
 * @property integer $creditslower
 */
class UserGroups extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UserGroups the static model class
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
		return '{{users_groups}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('type', 'required'),
			array('creditshigher, creditslower', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>64),
			array('type', 'length', 'max'=>7),
			array('image', 'length', 'max'=>32),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('gid, name, type, image, creditshigher, creditslower', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'gid' => 'Gid',
			'name' => 'Name',
			'type' => 'Type',
			'image' => 'Image',
			'creditshigher' => 'Creditshigher',
			'creditslower' => 'Creditslower',
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

		$criteria->compare('gid',$this->gid);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('creditshigher',$this->creditshigher);
		$criteria->compare('creditslower',$this->creditslower);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}