<div class="span9">
    <div class="widget widget-table">
        <div class="widget-header">
            <h3>运行记录</h3>
        </div>
        <div class="widget-content">
            <!--运行记录-->
            <div class="contents">
                <table class="table table-striped table-bordered table-set">
                    <thead>
                    <tr>
                        <th>操作者</th>
                        <th>用户组</th>
                        <th>IP 地址</th>
                        <th>时间</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($model as $key => $val){ ?>
                        <tr>
                            <td><?php echo $val['username']?></td>
                            <td><?php echo $val['groupid']?></td>
                            <td><?php echo $val['ip']?></td>
                            <td><?php echo date('Y-m-d H:i:s',$val['time'])?></td>
                        </tr>
                    <?php }?>
                    <tr>
                        <td colspan="4">
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
            </div>
            <!--运行记录-->
        </div>
    </div>
</div>