<div class="span9">
    <div class="widget widget-table">
        <div class="widget-header">
            <h3><span class="current">会员组</span></h3>
            <h3><span>特殊组</span></h3>
            <h3><span>管理组</span></h3>
            <h3><span>默认组</span></h3>
        </div>
        <div class="widget-content">
            <!--会员组-->
            <div class="contents">
                <form name="form" method="post" action="/index.php?r=admin/user/EditCredit">
                    <table class="table table-striped table-bordered table-set table-border">
                        <tbody>
                        <tr>
                            <th width="5%">编号</th>
                            <th width="20%">头衔</th>
                            <th width="15%">用户组图标</th>
                            <th width="19%">升级点数需求</th>
                            <th>操作</th>
                        </tr>
                        <?php foreach($group as $key=>$val){?>
                            <?php if($val['type'] == "member"){?>
                                <tr>
                                    <td><?php echo $val['gid']?></td>
                                    <td><input name="name" value="<?php echo $val['name']?>"></td>
                                    <td><img src="/static/image/level/<?php echo $val['image']?>"></td>
                                    <td>
                                        <input type="text" class="input-mini" name="grouppoints[<?php echo $val['gid']?>][creditshigher]" value="<?php echo $val['creditshigher']?>"> ~
                                        <input type="text" class="input-mini" name="grouppoints[<?php echo $val['gid']?>][creditslower]" value="<?php echo $val['creditslower']?>">
                                    </td>
                                    <td>
                                        <a href="/index.php?r=admin/user/groups/edit/gid/<?php echo $val['gid']?>">[编辑]</a>
                                        <a href="/index.php?r=admin/user/groups/del/gid/<?php echo $val['gid']?>">[删除]</a>
                                    </td>
                                </tr>
                            <?php }?>
                        <?php }?>
                        <tr>
                            <td colspan="5"><button type="submit" class="btn btn-primary">提交</button></td>
                        </tr>
                        </tbody>
                    </table>
                </form>
            </div>
            <!--会员组-->
            <!--特殊组-->
            <div class="contents hide">
                <form name="form" method="post" action="/index.php?r=admin/user/EditCredit">
                    <table class="table table-striped table-bordered table-set table-border">
                        <tbody>
                        <tr>
                            <th width="5%">编号</th>
                            <th width="20%">头衔</th>
                            <th width="15%">用户组图标</th>
                            <th>操作</th>
                        </tr>
                        <?php foreach($group as $key=>$val){?>
                            <?php if($val['type'] == "special"){?>
                                <tr>
                                    <td><?php echo $val['gid']?></td>
                                    <td><input name="name" class="input-large" value="<?php echo $val['name']?>"></td>
                                    <td><img src="/static/image/level/<?php echo $val['image']?>"></td>
                                    <td><a href="/index.php?r=admin/user/groups/edit/gid/<?php echo $val['gid']?>">[编辑]</a></td>
                                </tr>
                            <?php }?>
                        <?php }?>
                        <tr>
                            <td colspan="4"><button type="submit" class="btn btn-primary">提交</button></td>
                        </tr>
                        </tbody>
                    </table>
                </form>
            </div>
            <!--特殊组-->
            <!--管理组-->
            <div class="contents hide">
                <form name="form" method="post" action="/index.php?r=admin/user/EditCredit">
                    <table class="table table-striped table-bordered table-set table-border">
                        <tbody>
                        <tr>
                            <th width="5%">编号</th>
                            <th width="20%">头衔</th>
                            <th width="15%">用户组图标</th>
                            <th>操作</th>
                        </tr>
                        <?php foreach($group as $key=>$val){?>
                            <?php if($val['type'] == "system"){?>
                                <tr>
                                    <td><?php echo $val['gid']?></td>
                                    <td><input name="name" class="input-large" value="<?php echo $val['name']?>"></td>
                                    <td><img src="/static/image/level/<?php echo $val['image']?>"></td>
                                    <td><a href="/index.php?r=admin/user/groups/edit/gid/<?php echo $val['gid']?>">[编辑]</a></td>
                                </tr>
                            <?php }?>
                        <?php }?>
                        <tr>
                            <td colspan="4"><button type="submit" class="btn btn-primary">提交</button></td>
                        </tr>
                        </tbody>
                    </table>
                </form>
            </div>
            <!--管理组-->
            <!--默认组-->
            <div class="contents hide">
                <form name="form" method="post" action="/index.php?r=admin/user/EditCredit">
                    <table class="table table-striped table-bordered table-set table-border">
                        <tbody>
                        <tr>
                            <th width="5%">编号</th>
                            <th width="20%">头衔</th>
                            <th width="15%">用户组图标</th>
                            <th>操作</th>
                        </tr>
                        <?php foreach($group as $key=>$val){?>
                        <?php if($val['type'] == "default"){?>
                        <tr>
                            <td><?php echo $val['gid']?></td>
                            <td><input name="name" class="input-large" value="<?php echo $val['name']?>"></td>
                            <td><img src="/static/image/level/<?php echo $val['image']?>"></td>
                            <td><a href="/index.php?r=admin/user/groups/edit/gid/<?php echo $val['gid']?>">[编辑]</a></td>
                        </tr>
                        <?php }?>
                        <?php }?>
                        <tr>
                            <td colspan="4"><button type="submit" class="btn btn-primary">提交</button></td>
                        </tr>
                        </tbody>
                    </table>
                </form>
            </div>
            <!--默认组-->
        </div>
    </div>
</div>