<?php
class OSController extends ControllerBack
{
    //站点信息
    public function actionIndex()
    {
        $config = Config::model()->find();
        if(isset($_POST))
        {
            $model = Config::model()->findByPk(1);
            $model->id = $_POST['id'];
            $model->sitename = $_POST['sitename'];
            $model->website = $_POST['website'];
            $model->email = $_POST['email'];
            $model->icp = $_POST['icp'];
            $model->visitstate = $_POST['visitstate'];
            $model->visitmessage = $_POST['visitmessage'];
            if($model->save())
            {
                $this->redirect(array('/admin/os'));
            }
        }
        $this->render('index',array('config'=>$config));
    }

    //导航设置
    public function actionNav()
    {
        $nav = Nav::model()->findAll(array('select'=>'navid,rootid,type,name,link,isshow,orderid','condition'=>'type="main"','order'=>'orderid asc'));
        $this->render('nav',array('nav'=>$nav));
    }

    //保存导航设置
    public function actionDonav()
    {
        if(isset($_POST))
        {
            $model = new Nav;
            $model->orderid = $_POST['data']['orderid'];
            $model->name = $_POST['data']['name'];
            $model->link = $_POST['data']['link'];
            $model->rootid = $_POST['data']['rootid'];
            $model->isshow = $_POST['data']['isshow'];
            $model->type = main;
            $model->save();
            $this->redirect(array('/admin/os/nav'));
        }
    }

    //注册登录
    public function actionRegist()
    {
        $this->render('regist');
    }

    //编辑导航
    public function actionEdit()
    {
        $this->render('edit');
    }

    //SEO设置
    public function actionSeo()
    {
        $this->render('seo');
    }

    //积分设置
    public function actionCredit()
    {
        $this->render('credit');
    }

    //电子邮件
    public function actionMail()
    {
        $this->render('mail');
    }
}