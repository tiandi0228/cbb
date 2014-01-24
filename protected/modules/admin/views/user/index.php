<div class="span9">
    <div class="widget widget-table">
        <div class="widget-header">
            <h3>用户管理</h3>
        </div>
        <div class="widget-content">
            <!--用户管理-->
            <div class="contents">
                <div class="h-a">搜索</div>
                <div class="search">
                    <form action="/index.php?r=admin/user" method="post">
                        <label>用户组：</label>
                        <select name="groupid[]" size="5" class="mr10 mb10" multiple="">
                            <option value="1">管理员</option>
                            <option value="2">总版主</option>
                            <option value="3">论坛版主</option>
                            <option value="4">普通组</option>
                            <option value="5">会员</option>
                            <option value="6">游客</option>
                            <option value="7">禁止发言</option>
                            <option value="8">未验证会员</option>
                        </select>
                        <label>用户名：</label>
                        <input class="input-large" name="username" id="username" type="text" />
                        <label>UID：</label>
                        <input class="input-large" name="uid" id="uid" type="number" />
                        <label>电子邮箱：</label>
                        <input class="input-large" name="email" id="email" type="text" />
                        <button type="submit" class="btn btn-primary">搜索</button>
                    </form>
                </div>
                <form action="/index.php?r=admin/user/delete" method="post">
                <table class="table table-striped table-bordered table-set table-border">
                    <tbody>
                        <?php if(empty($model)){?>
                            <tr>
                                <td colspan="7"><div class="not-content">啊哦，没有符合条件的用户！</div></td>
                            </tr>
                        <?php }else{ ?>
                        <tr>
                            <th width="2%"></th>
                            <th width="5%">UID</th>
                            <th width="15%">用户名</th>
                            <th width="20%">电子邮箱</th>
                            <th width="20%">注册时间</th>
                            <th width="20%">最后登录时间</th>
                            <th>操作</th>
                        </tr>
                        <?php foreach ($model as $key => $val){ ?>
                            <tr>
                                <td>
                                    <?php if($val['groupid'] == "1"){ ?>
                                        <input name="uid[]" id="uid[]" type="checkbox" value="<?php echo $val['uid']?>" disabled="">
                                    <?php }else{ ?>
                                        <input name="uid[]" id="uid[]" type="checkbox" value="<?php echo $val['uid']?>">
                                    <?php } ?>
                                </td>
                                <td><?php echo $val['uid']?></td>
                                <td><?php echo $val['username']?></td>
                                <td><?php echo $val['email']?></td>
                                <td><?php echo date('Y-m-d H:i:s',$val['regtime'])?></td>
                                <td><?php echo date('Y-m-d H:i:s',$val['logintime'])?></td>
                                <td>
                                    <a href="index.php?r=admin/user/edit/uid/<?php echo $val['uid']?>">[编辑]</a>
                                    <a href="<?php echo $val['uid']?>">[清理]</a>
                                    <a href="/index.php?r=admin/user/ban/uid/<?php echo $val['uid']?>">[禁止]</a>
                                </td>
                            </tr>
                        <?php }}?>
                        <tr>
                            <td colspan="7">
                                <div class="delete">
                                    <input type="submit" value="删除" onClick="return confirm('确定要删除吗?')"/>
                                </div>
                                <div class="pagination">
                                    <?php
                                    $this->widget('CLinkPager',array(
                                            'header'=>'',
                                            'id'=>'pager',
                                            'htmlOptions'=>array('class'=>'pager'),
                                            'firstPageLabel' => '<<',
                                            'lastPageLabel' => '>>',
                                            'prevPageLabel' => '<',
                                            'nextPageLabel' => '>',
                                            'pages' => $pages,
                                            'maxButtonCount'=>13
                                        )
                                    );
                                    ?>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                </form>
            </div>
            <!--用户管理-->
        </div>
    </div>
</div>