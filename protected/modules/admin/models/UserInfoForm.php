<?php
class UserForm extends CActiveRecord
{
    public $uid;
    public $gender;
    public $birthday;
    public $location;
    public $hometown;
    public $homepage;
    public $qq;
    public $msn;
    public $aliww;
    public $mobile;
    public $alipay;
    public $signature;
    public $profile;
    public $regreason;
    public $telphone;
    public $address;
    public $zipcode;
    public $secret;

    public function rules()
    {
        return array(
        );
    }

    public function relations()
    {
        return array(
            'user' => array(self::HAS_ONE, 'User', 'uid'),
        );
    }

    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return '{{users_info}}';
    }

}