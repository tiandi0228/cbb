<div class="span9">
    <div class="widget widget-table">
        <div class="widget-header">
            <h3>站点信息</h3>
        </div>
        <div class="widget-content">
            <form id="form" method="post" action="/index.php?r=admin/os/index">
                <input type="hidden" name="id" value="<?php echo $config['id']?>">
                <table class="table table-striped table-bordered table-set">
                    <tbody>
                    <tr>
                        <th style="width:15%">站点名称</th>
                        <td><input type="text" class="input-large" name="sitename" id="sitename" value="<?php echo $config['sitename']?>"></td>
                        <td>
                            <div class="tips">默认站点名称，如果各个应用没有填写站点名称，则显示这个名称</div>
                        </td>
                    </tr>
                    <tr>
                        <th>站点地址</th>
                        <td><input type="text" class="input-large" name="website" id="website" value="<?php echo $config['website']?>"></td>
                        <td>
                            <div class="tips">填写您站点的完整域名。例如: http://www.cbb.com，不要以斜杠 (“/”) 结尾</div>
                        </td>
                    </tr>
                    <tr>
                        <th>管理员电子邮箱</th>
                        <td><input type="text" class="input-large" name="email" id="email" value="<?php echo $config['email']?>"></td>
                        <td>
                            <div class="tips">填写站点管理员的邮箱地址</div>
                        </td>
                    </tr>
                    <tr>
                        <th>ICP 备案信息</th>
                        <td><input type="text" class="input-large" name="icp" id="icp" value="<?php echo $config['icp']?>"></td>
                        <td>
                            <div class="tips">填写 ICP 备案的信息，例如: 浙ICP备xxxxxxxx号</div>
                        </td>
                    </tr>
                    <tr>
                        <th>第三方统计代码</th>
                        <td><textarea class="textarea-large" id="statisticscode" name="statisticscode"><?php echo $config['statisticscode']?></textarea></td>
                        <td>
                            <div class="tips">页面底部可以显示第三方统计</div>
                        </td>
                    </tr>
                    <tr>
                        <th>站点状态</th>
                        <td>
                            <ul class="rowform">
                                <li>
                                    <label>
                                        <input class="radio" id="hide" type="radio" name="visitstate" value="1" <?php if($config['visitstate'] == 1){?>checked<?php }?>>
                                        <span>开放</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input class="radio" id="show" type="radio" name="visitstate" value="0" <?php if($config['visitstate'] == 0){?>checked<?php }?>>
                                        <span>关闭</span>
                                    </label>
                                </li>
                            </ul>
                        </td>
                        <td>
                            <div class="tips">暂时将站点关闭，其他人无法访问，但不影响管理员访问</div>
                        </td>
                    </tr>
                    <tr class="visitmessage" style="display:<?php if($config['visitstate'] == 1){?>none<?php }?>">
                        <th>限制访问提示信息</th>
                        <td><textarea class="textarea-large" id="visitmessage" name="visitmessage"><?php echo $config['visitmessage']?></textarea></td>
                        <td>
                            <div class="tips">当站点处于关闭状态时，登录界面显示的提示信息</div>
                        </td>
                    </tr>
                    <tr>
                        <th>&nbsp;</th>
                        <td><button type="submit" class="btn btn-primary">提交</button></td>
                        <td>&nbsp;</td>
                    </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</div>