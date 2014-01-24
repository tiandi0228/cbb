<?php
class DefaultController extends ControllerBack
{
	public function actionIndex()
	{
        $groupid = UserForm::model()->count("groupid=:groupid",array(":groupid"=>7));
        $this->render('index',array('groupid'=>$groupid));
	}
}