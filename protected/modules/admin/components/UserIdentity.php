<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
    private $_id;
    public function authenticate() {
        $user=User::model()->find('LOWER(username)=?',array(strtolower($this->username)));
        if(empty($user))
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        elseif($user->password!==md5($this->password))
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        else{
            $this->_id=$user->uid;
            $this->setState('username',$user->username);
            $this->setState('groupid',$user->groupid);
            $this->errorCode=self::ERROR_NONE;

            $uid=$user['uid'];
            $ip = Yii::app()->request->userHostAddress;

            //保存登陆信息到日志
            $adminlog=new AdminLog;
            $adminlog->uid = $uid;
            $adminlog->username = $user->username;
            $adminlog->groupid = $user->groupid;
            $adminlog->ip = $ip;
            $adminlog->time = time();
            $adminlog->save();

            //更新登陆信息
            $user = User::model()->findByPk($uid);
            $user->loginip=$ip;
            $user->logintime=time();
            $user->logincount += 1;
            $user->save(false);
        }
        return !$this->errorCode;
    }
}