<div class="span9">
    <div class="widget widget-table">
        <div class="widget-header">
            <h3><span class="current">会员禁止</span></h3>
            <h3><span>解除禁止</span></h3>
        </div>
        <div class="widget-content">
            <!--会员禁止-->
            <div class="contents">
                <form id="form" action="/index.php?r=admin/user/ban" method="post">
                    <table class="table table-striped table-bordered table-set">
                        <tbody>
                            <tr>
                                <th width="10%">用户名</th>
                                <td width="25%"><input type="text" id="username" name="username" value="<?php echo $users['username']?>"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>有效期至</th>
                                <td>
                                    <?php
                                    $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                                        'name'=>'endtime',
                                        'model'=>$model,
                                        'value'=>$model['endtime'],
                                        'language'=>'zh_cn',
                                        'options' => array(
                                            'dateFormat'=>'yy-mm-dd',
                                            'showAnim'=>'fadeIn',
                                        ),
                                    ));
                                    ?>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>禁止类型</th>
                                <td>
                                    <ul class="rowform">
                                        <li><label><input type="checkbox" name="typeid[]" value="1"><span>禁止发布</span></label></li>
                                        <li><label><input type="checkbox" name="typeid[]" value="2"><span>禁止签名</span></label></li>
                                    </ul>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>禁止理由</th>
                                <td><textarea name="reason"></textarea></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>&nbsp;</th>
                                <td><button type="submit" class="btn btn-primary">提交</button></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
            <!--会员禁止-->
            <!--解除禁止-->
            <div class="contents hide">
                <form action="/index.php?r=admin/user/ban" method="post">
                    <table class="table table-striped table-bordered table-set table-border">
                        <tbody>
                            <tr>
                                <th width="2%"></th>
                                <th width="5%">UID</th>
                                <th width="10%">用户名</th>
                                <th width="15%">禁止类型</th>
                                <th width="20%">操作时间</th>
                                <th width="20%">到期时间</th>
                                <th width="10%">操作者</th>
                                <th>禁止原因</th>
                            </tr>
                            <?php foreach ($user as $key => $val){ ?>
                                <tr>
                                    <td>
                                        <input name="id[]" id="id[]" type="checkbox" value="<?php echo $val['id']?>">
                                    </td>
                                    <td><?php echo $val['uid']?></td>
                                    <td><?php echo $val['username']?></td>
                                    <?php if($val['typeid'] == "1"){?>
                                    <td>[禁止发布]</td>
                                    <?php }elseif($val['typeid'] == "2"){?>
                                    <td>[禁止签名]</td>
                                    <?php }else{?>
                                    <td>[禁止发布] [禁止签名]</td>
                                    <?php }?>
                                    <td><?php echo date('Y-m-d',$val['starttime'])?></td>
                                    <td><?php echo date('Y-m-d',$val['endtime'])?></td>
                                    <td><?php echo $val['operator']?></td>
                                    <td><?php echo $val['reason']?></td>
                                </tr>
                            <?php }?>
                            <tr>
                                <td colspan="8">
                                    <div class="delete">
                                        <button class="btn btn-primary mr15" type="submit">解禁</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
            <!--解除禁止-->
        </div>
    </div>
</div>