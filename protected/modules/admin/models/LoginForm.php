<?php
class LoginForm extends CFormModel
{
    public $username;
    public $password;

    private $_identity;

    public function rules()
    {
        return array(
            array('username, password', 'required','message'=>Yii::t('luben','{attribute}不能为空')),
            array('password', 'authenticate'),
        );
    }

    /**
     * Declares attribute labels.
     */
    public function attributeLabels()
    {
        return array(
            'username'=>'用户名',
            'password'=>'密　码'
        );
    }

    public function authenticate($attribute,$params)
    {
        $this->_identity=new UserIdentity($this->username,$this->password);
        if(!$this->_identity->authenticate())
            $this->addError('password','用户名或密码错误。');
    }

    /**
     * Logs in the user using the given username and password in the model.
     * @return boolean whether login is successful
     */
    public function login()
    {
        if($this->_identity===null)
        {
            $this->_identity=new UserIdentity($this->username,$this->password);
            $this->_identity->authenticate();
        }
        if($this->_identity->errorCode===UserIdentity::ERROR_NONE)
        {
            Yii::app()->user->login($this->_identity,$duration);
            return true;
        }
        else
            return false;
    }
}