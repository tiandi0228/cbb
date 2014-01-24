<?php
class UserController extends ControllerBack
{
    //用户管理
    public function actionIndex()
    {
        $criteria = new CDbCriteria();
        $uid = trim($_POST['uid']);
        $username = trim($_POST['username']);
        $groupid = $_POST['groupid'];
        $email = $_POST['email'];
        $criteria->select='uid,username,email,groupid,regtime,logintime';
        if($uid){
            $criteria->addSearchCondition('uid',$uid);
        }
        if($username){
            $criteria->addSearchCondition('username',$username);
        }
        if($groupid){
            $criteria->addInCondition('groupid',$groupid);
        }
        $criteria->order = 'uid asc';
        $count = User::model()->count($criteria);
        $pager = new CPagination($count);
        $pager->pageSize = 10;
        $pager->applyLimit($criteria);
        $model = User::model()->findAll($criteria);
        $this->render('index',array('model'=> $model,'pages'=>$pager));
    }

    //编辑用户
    public function actionEdit()
    {
        $uid = $_GET['uid'];
        $user = UserForm::model()->with('userinfo')->find('userinfo.uid='.$uid);
        $group = UserGroups::model()->findAll();
        $this->render('edit',array('user'=> $user,'group'=> $group));
    }

    //更新用户信息
    public function actionDoedit()
    {
        $uid = $_POST['uid'];
        $connection=Yii::app()->db;
        if(isset($_POST))
        {
            $users =array(
                'password' => $_POST['password'],
                'repassword' => $_POST['repassword'],
                'realname' => $_POST['realname'],
                'email' => $_POST['email'],
                'gender' => $_POST['gender'],
                'birthday' => $_POST['birthday'],
                'location' => $_POST['location'],
                'hometown' => $_POST['hometown'],
                'homepage' => $_POST['homepage'],
                'signature' => $_POST['signature'],
                'aliww' => $_POST['aliww'],
                'qq' => $_POST['qq'],
                'msn' => $_POST['msn'],
                'mobile' => trim($_POST['mobile'])
            );
            if(empty($users['password'])){
                $sql = "update cbb_users a left join cbb_users_info b on a.uid=b.uid set a.email='$users[email]',a.realname='$users[realname]',b.msn='$users[msn]',b.gender='$user[gender]',b.birthday='$users[birthday]',b.location='$users[location]',b.hometown='$users[hometown]',b.homepage='$users[homepage]',b.signature='$users[signature]',b.aliww='$users[aliww]',b.qq='$users[qq]',b.mobile='$users[mobile]' where a.uid=$uid";
            }else{
                $sql = "update cbb_users a left join cbb_users_info b on a.uid=b.uid set a.password=md5('$users[password]'),a.email='$users[email]',a.realname='$users[realname]',b.msn='$users[msn]',b.gender='$user[gender]',b.birthday='$users[birthday]',b.location='$users[location]',b.hometown='$users[hometown]',b.homepage='$users[homepage]',b.signature='$users[signature]',b.aliww='$users[aliww]',b.qq='$users[qq]',b.mobile='$users[mobile]' where a.uid=$uid";
            }
            $connection->createCommand($sql)->execute();
            $this->redirect(array('/admin/user/edit','uid'=>$uid));
        }
    }

    //删除用户
    public function actionDelete()
    {
        $uid=$_POST['uid'];
        $model = User::model()->find();
        $groupid = $model['groupid'];
        if(empty($uid)){
            echo"<html>";
            echo"<head><meta http-equiv='Content-Type' content='text/html; charset=utf-8' /></head>";
            echo"<script>alert('必须选择一个用户,才可以删除!');history.back(-1);</script>";
            echo"</html>";
            exit;
        }else{
            User::model()->deleteByPk($uid);
            $this->redirect(array('/admin/user'));
        }
    }

    //添加用户
    public function actionAdd()
    {
        $ip = Yii::app()->request->userHostAddress;
        $model = new UserForm;
        if(isset($_POST['UserForm']))
        {
            $model->attributes = $_POST['UserForm'];
            $model->username = $_POST['UserForm']['username'];
            $model->password = md5($_POST['UserForm']['password']);
            $model->email = $_POST['UserForm']['email'];
            $model->groupid = $_POST['UserForm']['groupid'];
            $model->regip = $ip;
            $model->regtime = time();
            //保存入库
            if($model->validate() && $model->save())
            {
                $uid = $model->attributes['uid'];
                //保存信息
                $userinfo=new UserInfo;
                $userinfo->uid = $uid;
                $userinfo->save(false);
                $this->redirect(array('/admin/user/add'));
            }
        }
        $this->render('add',array('model'=>$model));
    }

    //审核用户
    public function actionCheck()
    {
        $user = UserForm::model()->findAll(array('select'=>'uid,username,email,groupid','condition'=>'groupid=7'));
        $uid=$_POST['uid'];
        if(!empty($uid))
        {
            User::model()->updateByPk($uid,array('groupid'=>0));
            $this->redirect(array('/admin/user/check'));
        }
        $this->render('check',array('user'=>$user));
    }

    //用户禁止
    public function actionBan()
    {
        //添加
        $model = new BanForm;
        if(isset($_POST))
        {
            $username = $_POST['username'];
            $users = User::model()->find('username=:username', array(':username'=>$username));
            $model->uid = $users['uid'];
            if(isset($_POST['typeid'])){
                $typeid = implode(',',$_POST['typeid']);
            }
            $model->typeid = $typeid;
            $model->starttime = time();
            $model->endtime = strtotime($_POST['endtime']);
            $model->reason = $_POST['reason'];
            $model->operator = yii::app()->user->username;
            //保存入库
            if($model->validate() && $model->save())
            {
                $this->redirect(array('/admin/user/ban'));
            }
        }
        //列表
        $user = Yii::app()->db->createCommand()
            ->select('b.uid,username,typeid,starttime,endtime,operator,reason')
            ->from('cbb_users u')
            ->join('cbb_users_ban b', 'u.uid=b.uid')
            ->where('u.uid=b.uid')
            ->queryAll();
        $id=$_POST['id'];
        if(!empty($id))
        {
            UserBan::model()->deleteByPk($id);
            $this->redirect(array('/admin/user/ban'));
        }
        if(!empty($_GET['uid'])){
            $uid = $_GET['uid'];
            $users = UserForm::model()->find('uid='.$uid);
        }
        $this->render('ban',array('user'=>$user,'model'=>$model,'users'=>$users));
    }

    //用户组权限
    public function actionGroups()
    {
        $group = UserGroups::model()->findAll();
        $this->render('groups',array('group'=>$group));
    }
}