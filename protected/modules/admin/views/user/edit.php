<div class="span9">
    <div class="widget widget-table">
        <div class="widget-header">
            <h3><span class="current">用户信息</span></h3>
            <h3><span>积分</span></h3>
            <h3><span>用户组</span></h3>
        </div>
        <div class="widget-content">
            <!--用户信息-->
            <div class="contents">
                <form id="form" action="/index.php?r=admin/user/doedit" method="post">
                    <input type="hidden" value="<?php echo $user['uid']?>" name="uid">
                    <table class="table table-striped table-bordered table-set">
                        <tbody>
                        <tr>
                            <th colspan="3"><b>用户信息</b></th>
                        </tr>
                        <tr>
                            <th style="width:15%">UID</th>
                            <td colspan="2"><?php echo $user['uid']?></td>
                        </tr>
                        <tr>
                            <th>用户名</th>
                            <td colspan="2"><?php echo $user['username']?></td>
                        </tr>
                        <tr>
                            <th>头像</th>
                            <td colspan="2">
                                <img id="J_face_img" class="J_avatar" data-type="middle" src="/static/image/admincp/default_avatar.jpg?t=1389419304">
                            </td>
                        </tr>
                        <tr>
                            <th>新密码</th>
                            <td colspan="2"><input type="password" class="input-large" id="password" name="password" value=""></td>
                        </tr>
                        <tr>
                            <th>确认密码</th>
                            <td width="22%"><input type="password" class="input-large" id="repassword" name="repassword" value=""></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>注册时间</th>
                            <td colspan="2"><?php echo date('Y-m-d H:i:s',$user['regtime'])?></td>
                        </tr>
                        <tr>
                            <th>注册IP</th>
                            <td colspan="2"><?php echo $user['regip']?></td>
                        </tr>
                        <tr>
                            <th>最后登录时间</th>
                            <td colspan="2"><?php echo date('Y-m-d H:i:s',$user['logintime'])?></td>
                        </tr>
                        <tr>
                            <th>在线时间（小时）</th>
                            <td colspan="2"></td>
                        </tr>
                        <tr>
                            <th colspan="3"><b>基本资料</b></th>
                        </tr>
                        <tr>
                            <th>真实姓名</th>
                            <td><input id="realname" name="realname" type="text" class="input-large" value="<?php echo $user['realname']?>"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>性别</th>
                            <td colspan="2">
                                <select name="gender">
                                    <option value="1" <?php if($user['userinfo']['gender'] == "1"){?>selected<?php }?>>女</option>
                                    <option value="0" <?php if($user['userinfo']['gender'] == "0"){?>selected<?php }?>>男</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>生日</th>
                            <td colspan="2">
                                <?php
                                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                                    'name'=>'birthday',
                                    'model'=>$user,
                                    'value'=>$user['userinfo']['birthday'],
                                    'language'=>'zh_cn',
                                    'options' => array(
                                        'dateFormat'=>'yy-mm-dd',
                                        'showAnim'=>'fadeIn',
                                    ),
                                ));
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <th>现居住地</th>
                            <td colspan="2"><input id="location" name="location" type="text" class="input-large" value="<?php echo $user['userinfo']['location']?>"></td>
                        </tr>
                        <tr>
                            <th>家乡</th>
                            <td colspan="2"><input id="hometown" name="hometown" type="text" class="input-large" value="<?php echo $user['userinfo']['hometown']?>"></td>
                        </tr>
                        <tr>
                            <th>个人主页</th>
                            <td><input id="homepage" name="homepage" type="text" class="input-large" value="<?php echo $user['userinfo']['homepage']?>"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>自我简介</th>
                            <td colspan="2">
                                <textarea id="signature" name="signature"><?php echo $user['userinfo']['signature']?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="3"><b>联系信息</b></th>
                        </tr>
                        <tr>
                            <th>电子邮箱</th>
                            <td><input name="email" id="email" type="text" class="input-large" value="<?php echo $user['email']?>"></td>
                            <td class="status"></td>
                        </tr>
                        <tr>
                            <th>阿里旺旺</th>
                            <td colspan="2"><input name="aliww" type="text" class="input-large" value="<?php echo $user['userinfo']['aliww']?>"></td>
                        </tr>
                        <tr>
                            <th>QQ</th>
                            <td><input name="qq" id="qq" type="text" class="input-large" value="<?php echo $user['userinfo']['qq']?>"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>MSN</th>
                            <td><input name="msn" id="msn" type="text" class="input-large" value="<?php echo $user['userinfo']['msn']?>"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>手机号码</th>
                            <td><input name="mobile" id="mobile" type="text" class="input-large" value="<?php echo $user['userinfo']['mobile']?>"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>&nbsp;</th>
                            <td colspan="2"><button type="submit" class="btn btn-primary">提交</button></td>
                        </tr>
                        </tbody>
                    </table>
                </form>
            </div>
            <!--用户信息-->
            <!--积分-->
            <div class="contents hide">
                <form name="form" method="post" action="/index.php?r=admin/user/EditCredit">
                    <input type="hidden" value="<?php echo $user['uid']?>" name="uid">
                    <table class="table table-striped table-bordered table-set">
                        <tbody>
                        <tr>
                            <th colspan="3"><b>编辑积分</b></th>
                        </tr>
                        <tr>
                            <th style="width:15%">用户名</th>
                            <td><span class="mr10"><?php echo $user['username']?></span>(UID: <?php echo $user['uid']?>)</td>
                        </tr>
                        <tr>
                            <th>铜币</th>
                            <td><input type="text" class="input-large" id="text" value=""></td>
                        </tr>
                        <tr>
                            <th>&nbsp;</th>
                            <td><button type="submit" class="btn btn-primary">提交</button></td>
                        </tr>
                        </tbody>
                    </table>
                </form>
            </div>
            <!--积分-->
            <!--用户组-->
            <div class="contents hide">
                <form name="form" method="post" action="/index.php?r=admin/user/EditGroup">
                    <input type="hidden" name="uid value="<?php echo $user['uid']?>">
                    <table class="table table-striped table-bordered table-set">
                        <tbody>
                        <tr>
                            <th colspan="3"><b>编辑用户组</b></th>
                        </tr>
                        <tr>
                            <th style="width:15%">用户名</th>
                            <td colspan="2"><span class="mr10"><?php echo $user['username']?></span>(UID: <?php echo $user['uid']?>)</td>
                        </tr>
                        <tr>
                            <th>默认用户组</th>
                            <td>
                                <select name="groupid">
                                    <?php foreach ($group as $key => $val){ ?>
                                        <?php if($val['type'] == "system" || $val['type'] == "default" || $val['type'] == "special") {?>
                                        <option value="<?php echo $val['gid']?>" <?php if($user['groupid'] == $val['gid']){?>selected<?php }?>><?php echo $val['name']?></option>
                                        <?php }?>
                                    <?php } ?>
                                    <option value="0" <?php if($user['groupid'] == 0){?>selected<?php }?>>普通组</option>
                                </select>
                            </td>
                            <td>
                                <div class="tips">用户默认的用户组，注意：如果拥有用户组中设置了附加组，默认用户组会根据系统默认用户组优先级重新计算当前的用户组。</div>
                            </td>
                        </tr>
                        <tr>
                            <th>拥有用户组</th>
                            <td>
                                <div class="cross">
                                    <ul>
                                        <li>
                                            <span class="span_1">用户组</span>
                                            <span class="span_1">到期时间</span>
                                        </li>
                                        <?php foreach ($group as $key => $val){ ?>
                                            <?php if($val['type'] == "system"){?>
                                            <li>
                                                <span class="span_1"><label><input name="groups[]" type="checkbox" class="checkbox" value="1" checked="checked"><?php echo $val['name']?></label></span>
                                                <span class="span_1">
                                                    <input name="endtime[3]" type="text" class="input-large" value="<?php $val['gid']?>">
                                                </span>
                                            </li>
                                        <?php }} ?>
                                        <!--普通组-->
                                        <li>
                                            <span class="span_1"><label><input name="" type="checkbox" class="checkbox" value="0" checked="checked" disabled="disabled">普通组</label></span>
                                            <span class="span_1">
                                                <input name="" type="text" class="input-large" disabled="disabled" value="0">
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                            <td>
                                <div class="tips">设置用户拥有的用户组，通过到期时间，可以控制用户拥有该用户组的时间，到期后系统自动取消对应用户组。</div>
                            </td>
                        </tr>
                        <tr>
                            <th>&nbsp;</th>
                            <td colspan="2"><button type="submit" class="btn btn-primary">提交</button></td>
                        </tr>
                        </tbody>
                    </table>
                </form>
            </div>
            <!--用户组-->
        </div>
    </div>
</div>