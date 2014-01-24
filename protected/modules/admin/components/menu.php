<?php
class menu extends CWidget
{
    protected function renderContent()
    {
        $url=Yii::app()->getController()->id;
        $this->widget(
            'zii.widgets.CMenu',
            array(
                'activeCssClass'=>'active',
                'id'=>'main-nav',
                //'linkLabelWrapper'=>'span',
                //'linkLabelWrapperHtmlOptions'=>	array('class'=>'nav nav-tabs nav-stacked'),
                'htmlOptions'=>array('class'=>'nav nav-tabs nav-stacked'),
                'items'=>array(
                    //首页
                    array('label'=>'后台首页', 'url'=>array('/admin'),'itemOptions'=>array('class'=>'active'),'visible'=>$url=='default'),
                    //全局
                    array('label'=>'站点信息', 'url'=>array('/admin/os/index'),'visible'=>$url=='os'),
                    array('label'=>'导航设置', 'url'=>array('/admin/os/nav'),'visible'=>$url=='os'),
                    array('label'=>'注册登录', 'url'=>array('/admin/os/regist'),'visible'=>$url=='os'),
                    array('label'=>'SEO设置', 'url'=>array('/admin/os/seo'),'visible'=>$url=='os'),
                    array('label'=>'积分设置', 'url'=>array('/admin/os/credit'),'visible'=>$url=='os'),
                    array('label'=>'电子邮件', 'url'=>array('/admin/os/mail'),'visible'=>$url=='os'),
                    //界面
                    array('label'=>'风格管理', 'url'=>array('/admin/style/index'),'visible'=>$url=='style'),
                    array('label'=>'界面设置', 'url'=>array('/admin/style/set'),'visible'=>$url=='style'),
                    array('label'=>'表情管理', 'url'=>array('/admin/style/smilies'),'visible'=>$url=='style'),
                    array('label'=>'列表图标', 'url'=>array('/admin/style/online'),'visible'=>$url=='style'),
                    //内容
                    array('label'=>'数据库', 'url'=>array('/admin/moderate/index'),'visible'=>$url=='moderate'),
                    array('label'=>'缓存管理', 'url'=>array('/admin/moderate/cache'),'visible'=>$url=='moderate'),
                    array('label'=>'运行记录', 'url'=>array('/admin/moderate/log'),'visible'=>$url=='moderate'),
                    //论坛
                    array('label'=>'论坛设置', 'url'=>array('/admin/forum/index'),'visible'=>$url=='forum'),
                    array('label'=>'板块管理', 'url'=>array('/admin/forum/set'),'visible'=>$url=='forum'),
                    array('label'=>'功能细节', 'url'=>array('/admin/forum/function'),'visible'=>$url=='forum'),
                    //用户
                    array('label'=>'用户管理', 'url'=>array('/admin/user/index'),'visible'=>$url=='user'),
                    array('label'=>'添加用户', 'url'=>array('/admin/user/add'),'visible'=>$url=='user'),
                    array('label'=>'审核用户', 'url'=>array('/admin/user/check'),'visible'=>$url=='user'),
                    array('label'=>'用户禁止', 'url'=>array('/admin/user/ban'),'visible'=>$url=='user'),
                    array('label'=>'用户组权限', 'url'=>array('/admin/user/groups'),'visible'=>$url=='user'),
                    //工具
                    array('label'=>'数据库', 'url'=>array('/admin/tools/index'),'visible'=>$url=='tools'),
                    array('label'=>'缓存管理', 'url'=>array('/admin/tools/cache'),'visible'=>$url=='tools'),
                    array('label'=>'运行记录', 'url'=>array('/admin/tools/log'),'visible'=>$url=='tools'),
                )
            )
        );
    }

    public function run(){
        $this->renderContent();
        // 此方法会被 CController::endWidget() 调用
    }
}