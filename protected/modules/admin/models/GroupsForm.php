<?php
class UserForm extends CActiveRecord
{
    public $gid;
    public $name;
    public $type;
    public $image;
    public $creditshigher;
    public $creditslower;

    public function rules()
    {
        return array(
            array('username, password, email', 'required', 'message'=>Yii::t('luben','{attribute}不能为空')), // 必填
            array('username', 'unique', 'message'=>Yii::t('luben','用户名：{value} 已经被注册，请更换')), // 唯一，不能有重复记录
            array('email', 'unique', 'message'=>Yii::t('luben','Email：{value} 已经被注册，请更换')), // 唯一，不能有重复记录
            array('email', 'email', 'message'=>Yii::t('luben','{attribute}请填写正确')),
            array('username', 'length', 'max'=>'6', 'encoding'=>'utf-8'),
            array('password', 'length', 'min'=>'6' ,'max'=>'32', 'encoding'=>'utf-8'),
        );
    }

    public function relations()
    {
        return array(

        );
    }

    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return '{{users_groups}}';
    }

}