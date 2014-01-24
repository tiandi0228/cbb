<?php

/**
 * This is the model class for table "{{users}}".
 *
 * The followings are the available columns in table '{{users}}':
 * @property integer $uid
 * @property string $usercode
 * @property string $username
 * @property string $password
 * @property integer $groupid
 * @property string $realname
 * @property string $email
 * @property string $regip
 * @property integer $regtime
 * @property string $loginip
 * @property integer $logintime
 * @property string $logincount
 * @property integer $credits
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
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
		return '{{users}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('usercode, username, password, groupid, regip, regtime, loginip, logintime', 'required'),
			array('groupid, regtime, logintime, credits', 'numerical', 'integerOnly'=>true),
			array('usercode', 'length', 'max'=>16),
			array('username', 'length', 'max'=>30),
			array('password', 'length', 'max'=>32),
			array('realname, email', 'length', 'max'=>50),
			array('regip, loginip, logincount', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('uid, usercode, username, password, groupid, realname, email, regip, regtime, loginip, logintime, logincount, credits', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
    public function relations()
    {
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
			'usercode' => 'Usercode',
			'username' => 'Username',
			'password' => 'Password',
			'groupid' => 'Groupid',
			'realname' => 'Realname',
			'email' => 'Email',
			'regip' => 'Regip',
			'regtime' => 'Regtime',
			'loginip' => 'Loginip',
			'logintime' => 'Logintime',
			'logincount' => 'Logincount',
			'credits' => 'Credits',
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

		$criteria->compare('uid',$this->uid);
		$criteria->compare('usercode',$this->usercode,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('groupid',$this->groupid);
		$criteria->compare('realname',$this->realname,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('regip',$this->regip,true);
		$criteria->compare('regtime',$this->regtime);
		$criteria->compare('loginip',$this->loginip,true);
		$criteria->compare('logintime',$this->logintime);
		$criteria->compare('logincount',$this->logincount,true);
		$criteria->compare('credits',$this->credits);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}