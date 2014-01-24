<?php

/**
 * This is the model class for table "{{nav}}".
 *
 * The followings are the available columns in table '{{nav}}':
 * @property string $navid
 * @property string $parentid
 * @property string $rootid
 * @property string $type
 * @property string $sign
 * @property string $name
 * @property string $style
 * @property string $link
 * @property string $alt
 * @property string $image
 * @property integer $target
 * @property integer $isshow
 * @property integer $orderid
 */
class Nav extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Nav the static model class
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
		return '{{nav}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('target, isshow, orderid', 'numerical', 'integerOnly'=>true),
			array('parentid, rootid', 'length', 'max'=>10),
			array('type, sign', 'length', 'max'=>32),
			array('name, style, alt', 'length', 'max'=>50),
			array('link, image', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('navid, parentid, rootid, type, sign, name, style, link, alt, image, target, isshow, orderid', 'safe', 'on'=>'search'),
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
			'navid' => 'Navid',
			'parentid' => 'Parentid',
			'rootid' => 'Rootid',
			'type' => 'Type',
			'sign' => 'Sign',
			'name' => 'Name',
			'style' => 'Style',
			'link' => 'Link',
			'alt' => 'Alt',
			'image' => 'Image',
			'target' => 'Target',
			'isshow' => 'Isshow',
			'orderid' => 'Orderid',
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

		$criteria->compare('navid',$this->navid,true);
		$criteria->compare('parentid',$this->parentid,true);
		$criteria->compare('rootid',$this->rootid,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('sign',$this->sign,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('style',$this->style,true);
		$criteria->compare('link',$this->link,true);
		$criteria->compare('alt',$this->alt,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('target',$this->target);
		$criteria->compare('isshow',$this->isshow);
		$criteria->compare('orderid',$this->orderid);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}