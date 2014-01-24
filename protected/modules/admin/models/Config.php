<?php

/**
 * This is the model class for table "{{config}}".
 *
 * The followings are the available columns in table '{{config}}':
 * @property integer $id
 * @property string $sitename
 * @property string $website
 * @property string $email
 * @property string $icp
 * @property string $statisticscode
 * @property integer $visitstate
 * @property string $visitmessage
 */
class Config extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Config the static model class
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
		return '{{config}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, website, email, visitstate', 'required'),
			array('id, visitstate', 'numerical', 'integerOnly'=>true),
			array('sitename, website, icp', 'length', 'max'=>255),
			array('email', 'length', 'max'=>50),
			array('statisticscode, visitmessage', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, sitename, website, email, icp, statisticscode, visitstate, visitmessage', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'sitename' => 'Sitename',
			'website' => 'Website',
			'email' => 'Email',
			'icp' => 'Icp',
			'statisticscode' => 'Statisticscode',
			'visitstate' => 'Visitstate',
			'visitmessage' => 'Visitmessage',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('sitename',$this->sitename,true);
		$criteria->compare('website',$this->website,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('icp',$this->icp,true);
		$criteria->compare('statisticscode',$this->statisticscode,true);
		$criteria->compare('visitstate',$this->visitstate);
		$criteria->compare('visitmessage',$this->visitmessage,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}