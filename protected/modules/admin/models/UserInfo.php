<?php

/**
 * This is the model class for table "{{users_info}}".
 *
 * The followings are the available columns in table '{{users_info}}':
 * @property string $uid
 * @property integer $gender
 * @property string $birthday
 * @property string $location
 * @property string $hometown
 * @property string $homepage
 * @property string $qq
 * @property string $msn
 * @property string $aliww
 * @property string $mobile
 * @property string $alipay
 * @property string $signature
 * @property string $profile
 * @property string $regreason
 * @property string $telphone
 * @property string $address
 * @property string $zipcode
 * @property string $secret
 */
class UserInfo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UserInfo the static model class
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
		return '{{users_info}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('birthday', 'required'),
			array('gender', 'numerical', 'integerOnly'=>true),
			array('uid, zipcode', 'length', 'max'=>10),
			array('location, hometown, address', 'length', 'max'=>100),
			array('homepage', 'length', 'max'=>75),
			array('qq', 'length', 'max'=>12),
			array('msn', 'length', 'max'=>40),
			array('aliww, alipay', 'length', 'max'=>30),
			array('mobile', 'length', 'max'=>16),
			array('regreason', 'length', 'max'=>200),
			array('telphone', 'length', 'max'=>20),
			array('secret', 'length', 'max'=>500),
			array('signature, profile', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('uid, gender, birthday, location, hometown, homepage, qq, msn, aliww, mobile, alipay, signature, profile, regreason, telphone, address, zipcode, secret', 'safe', 'on'=>'search'),
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
			'uid' => 'Uid',
			'gender' => 'Gender',
			'birthday' => 'Birthday',
			'location' => 'Location',
			'hometown' => 'Hometown',
			'homepage' => 'Homepage',
			'qq' => 'Qq',
			'msn' => 'Msn',
			'aliww' => 'Aliww',
			'mobile' => 'Mobile',
			'alipay' => 'Alipay',
			'signature' => 'Signature',
			'profile' => 'Profile',
			'regreason' => 'Regreason',
			'telphone' => 'Telphone',
			'address' => 'Address',
			'zipcode' => 'Zipcode',
			'secret' => 'Secret',
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

		$criteria->compare('uid',$this->uid,true);
		$criteria->compare('gender',$this->gender);
		$criteria->compare('birthday',$this->birthday,true);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('hometown',$this->hometown,true);
		$criteria->compare('homepage',$this->homepage,true);
		$criteria->compare('qq',$this->qq,true);
		$criteria->compare('msn',$this->msn,true);
		$criteria->compare('aliww',$this->aliww,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('alipay',$this->alipay,true);
		$criteria->compare('signature',$this->signature,true);
		$criteria->compare('profile',$this->profile,true);
		$criteria->compare('regreason',$this->regreason,true);
		$criteria->compare('telphone',$this->telphone,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('zipcode',$this->zipcode,true);
		$criteria->compare('secret',$this->secret,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}