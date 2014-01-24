<?php
class BanForm extends CActiveRecord
{
    public $uid;
    public $typeid;
    public $endtime;
    public $reason;

    public function rules()
    {
        return array(
            array('typeid, endtime, reason', 'required', 'message'=>Yii::t('luben','{attribute}不能为空')), // 必填
            array('uid', 'unique', 'message'=>Yii::t('luben','此用户已经在禁止列表中！')), // 唯一，不能有重复记录
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
        return '{{users_ban}}';
    }

}