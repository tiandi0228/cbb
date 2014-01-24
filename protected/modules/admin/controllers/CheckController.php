<?php
class CheckController extends ControllerBack
{
    //验证邮箱
    public function actionEmail()
    {
        $email = $_GET['email'];
        $criteria = new CDbCriteria();
        $criteria->select='email';
        $criteria->addSearchCondition('email',$email);
        $user = User::model()->find($criteria);
        if($_GET)
        {
            if($email !== $user['email'])
            {
                echo 'true';
            }else{
                echo 'false';
            }
            exit();
        }
    }

    //验证用户名
    public function actionUsername()
    {
        $username = $_GET['username'];
        $criteria = new CDbCriteria();
        $criteria->select='username';
        $criteria->addSearchCondition('username',$username);
        $user = User::model()->find($criteria);
        if($_GET)
        {
            if($username !== $user['username'])
            {
                echo 'true';
            }else{
                echo 'false';
            }
            exit();
        }
    }
}