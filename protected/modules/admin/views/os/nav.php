<div class="span9">
    <div class="widget widget-table">
        <div class="widget-header">
            <h3>导航设置</h3>
        </div>
        <div class="widget-content">
            <form id="form" method="post" action="/index.php?r=admin/os/donav">
                <table class="table table-striped table-bordered table-set table-border">
                    <thead>
                        <tr>
                            <th width="30">顺序</th>
                            <th width="200">导航名称</th>
                            <th width="200">链接地址</th>
                            <th width="30">启用</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody class="first">
                        <?php foreach($nav as $key=>$val){?>
                        <tr>
                            <td>
                                <input name="data[<?php echo $val['navid']?>][navid]" type="hidden" value="<?php echo $val['navid']?>">
                                <input type="text" class="input-large" id="orderid" name="data[<?php echo $val['navid']?>][orderid]" value="<?php echo $val['orderid']?>" style="width:15px;">
                            </td>
                            <td><input type="text" class="input-large" id="name" name="data[<?php echo $val['navid']?>][name]" value="<?php echo $val['name']?>" style="width:80%;"></td>
                            <td><input type="text" class="input-large" id="data[<?php echo $val['navid']?>][link]" name="link" value="<?php echo $val['link']?>"></td>
                            <td><input name="data[<?php echo $val['navid']?>][isshow]" type="checkbox" value="1" <?php if($val['isshow'] == 1){?>checked<?php }?>></td>
                            <td>
                                <a href="index.php?r=admin/os/edit/<?php echo $val['navid']?>">[编辑]</a>
                                <a href="/index.php?r=admin/os/del/<?php echo $val['navid']?>">[删除]</a>
                            </td>
                        </tr>
                        <?php }?>
                    </tbody>
                    <tbody>
                        <tr>
                            <td colspan="6" style="height:40px;padding:0 20px;line-height:40px;"><a href="javascript:;" class="addnav"><i class="icon-plus-sign"></i> 添加导航</a></td>
                        </tr>
                    <tbody>
                    <tbody>
                        <tr>
                            <td colspan="6"><button type="submit" class="btn btn-primary">提交</button></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</div>