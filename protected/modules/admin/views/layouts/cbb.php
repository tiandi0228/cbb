<?php $this->beginContent('application.modules.admin.views.layouts.main'); ?>
<table width="100%" height="100%" style="table-layout:fixed;">
    <tbody>
    <tr class="head">
        <th>
            <a class="logo" href="./">CBB</a>
        </th>
        <td>
            <div class="navbar nav-collapse">
                <ul class="nav pull-left">
                    <li><a href="index.php?r=admin">首页</a></li>
                    <li class="divider-vertical"></li>
                    <li><a href="index.php?r=admin/os">全局</a></li>
                    <li class="divider-vertical"></li>
                    <li><a href="index.php?r=admin/style">界面</a></li>
                    <li class="divider-vertical"></li>
                    <li><a href="index.php?r=admin/moderate">内容</a></li>
                    <li class="divider-vertical"></li>
                    <li><a href="index.php?r=admin/forum">论坛</a></li>
                    <li class="divider-vertical"></li>
                    <li><a href="index.php?r=admin/user">用户</a></li>
                    <li class="divider-vertical"></li>
                    <li><a href="index.php?r=admin/tools">工具</a></li>
                    <li class="divider-vertical"></li>
                </ul>
                <ul class="nav pull-right">
                    <li>您好，<?=yii::app()->user->username;?></li>
                    <li><a href="<?=CHtml::normalizeUrl(array('/admin/logout'))?>">[退出]</a></li>
                    <li><a href="#">[站点首页]</a></li>
                </ul>
                <ul class="weather pull-right">
                    <?php //$this->widget('application.modules.admin.components.weather');?>
                </ul>
            </div>
        </td>
    </tr>
    <tr class="content">
        <th valign="top">
            <div class="container" style="margin-left:10px;">
                <div class="span3">
                    <?php $this->widget('application.modules.admin.components.menu');?>
                    <div id="footer">
                        <p>&copy; 2013 <a href="#">CBB</a>.</p>
                    </div>
                </div>
            </div>
        </th>
        <td valign="top">
            <div class="container" style="margin-left:20px;margin-right:10px;">
                <div class="row">
                    <?php echo $content ?>
<!--                    <iframe src="--><?php //echo htmlspecialchars(WindUrlHelper::createUrl(Yii::app()->homeLink), ENT_QUOTES, 'UTF-8');?><!--" width="100%" frameborder="0" scrolling="auto"></iframe>-->
                </div>
            </div>
        </td>
    </tr>
    </tbody>
</table>
<?php $this->endContent(); ?>