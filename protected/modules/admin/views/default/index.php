<div class="span9">
    <h1 class="page-title">
        <i class="icon-home"></i>
        CBB 管理中心
    </h1>
    <div class="stat-container">
        <div class="stat-holder">
            <a href="/index.php?r=admin/user/check">
                <div class="stat">
                    <span><?php echo $groupid?></span>
                    等待验证会员数
                </div>
            </a>
        </div>
        <div class="stat-holder">
            <a href="#">
                <div class="stat">
                    <span>423</span>
                    等待审核主题数
                </div>
            </a>
        </div>
        <div class="stat-holder">
            <a href="#">
                <div class="stat">
                    <span>96</span>
                    等待审核的回复数
                </div>
            </a>
        </div>
        <div class="stat-holder">
            <a href="#">
                <div class="stat">
                    <span>2</span>
                    回收站中的主题数
                </div>
            </a>
        </div>
    </div>
    <div class="widget widget-table">
        <div class="widget-header">
            <h3>系统信息</h3>
        </div>
        <div class="widget-content">
            <table class="table table-striped table-bordered">
                <tbody>
                <tr>
                    <th style="width:21%">程序版本</th>
                    <td>CBB 1.0 Release 20131223 <a href="#">看最新版本</a></td>
                </tr>
                <tr>
                    <th>服务器系统及 PHP</th>
                    <td><?php echo $_SERVER["SERVER_SOFTWARE"];?></td>
                </tr>
                <tr>
                    <th>服务器软件</th>
                    <td><?php echo php_sapi_name();?></td>
                </tr>
                <tr>
                    <th>服务器 MySQL 版本</th>
                    <td><?php echo mysql_get_server_info()?mysql_get_server_info():"不支持"; ?></td>
                </tr>
                <tr>
                    <th>上传许可</th>
                    <td><?php echo get_cfg_var("upload_max_filesize")?get_cfg_var("upload_max_filesize"):"不允许上传附件";?></td>
                </tr>
                <tr>
                    <th>最大执行时间</th>
                    <td><?php echo ini_get('max_execution_time'); ?>秒</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="widget widget-table">
        <div class="widget-header">
            <h3>开发团队</h3>
        </div>
        <div class="widget-content">
            <table class="table table-striped table-bordered">
                <tbody>
                <tr>
                    <th style="width:21%">版权所有</th>
                    <td colspan="3">社区公告板（Community Bulletin Board）</td>
                </tr>
                <tr>
                    <th>产品设计与研发团队</th>
                    <td><a href="#">iSun</a></td>
                    <td><a href="#">tony</a></td>
                    <td>&nbsp;</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
