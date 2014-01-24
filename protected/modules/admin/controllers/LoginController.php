<?php
class LoginController extends CController
{
    public function actionIndex()
    {
        $model=new LoginForm;
        Yii::app()->user->returnUrl = Yii::app()->getBaseUrl()."index.php?r=admin";
        if(isset($_POST['LoginForm'])){
            $model->attributes=$_POST['LoginForm'];
            if($model->validate() && $model->login())
                $this->redirect(Yii::app()->user->returnUrl);
        }
        $this->render('index',array('model'=>$model));
    }
}