<div class="span9">
    <div class="widget widget-table">
        <div class="widget-header">
            <h3>审核用户</h3>
        </div>
        <div class="widget-content">
            <!--审核用户-->
            <div class="contents">
                <form action="/index.php?r=admin/user/check" method="post">
                <table class="table table-striped table-bordered table-set table-border">
                    <thead>
                    <tr>
                        <th colspan="6">如果<a href="/index.php?r=admin/os/regist">【注册设置】</a>中开启了“新用户注册审核”，则需要在这里审核通过后，用户才能正常操作</th>
                    </tr>
                    <tr>
                        <th width="2%"></th>
                        <th width="10%">UID</th>
                        <th width="10%">用户名</th>
                        <th width="20%">注册时间</th>
                        <th width="20%">电子邮箱</th>
                        <th>注册原因</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php foreach($user as $key=>$val){?>
                        <tr>
                            <td><input name="uid[]" id="uid[]" type="checkbox" value="<?php echo $val['uid']?>"></td>
                            <td><?php echo $val['uid']?></td>
                            <td><?php echo $val['username']?></td>
                            <td><?php echo date('Y-m-d H:i:s',$val['regtime'])?></td>
                            <td><?php echo $val['email']?></td>
                            <td></td>
                        </tr>
                        <?php }?>
                        <tr>
                            <td colspan="6">
                                <div class="delete">
                                    <label class="mr15">
                                        <input name="checkall" type="checkbox" id="checkall" value="check">
                                        <span>全选</span>
                                    </label>
                                    <button class="btn btn-primary mr15" type="submit">通过</button>
                                    <button class="btn" type="submit" onClick="return confirm('确定要忽略吗?')"/>忽略</button>
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
            <!--审核用户-->
        </div>
    </div>
</div>