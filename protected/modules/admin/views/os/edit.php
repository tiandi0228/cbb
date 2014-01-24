<div class="span9">
    <div class="widget widget-table">
        <div class="widget-header">
            <h3>修改导航</h3>
        </div>
        <div class="widget-content">
            <form name="cpform" method="post" autocomplete="off" action="" id="cpform" enctype="multipart/form-data">
                <table class="table table-striped table-bordered table-set">
                    <tbody>
                    <tr>
                        <th style="width:15%">导航名称</th>
                        <td><input type="text" class="input-large" id="text" value="首页"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>导航说明</th>
                        <td><input type="text" class="input-large" id="text" value="Home"></td>
                        <td>
                            <div class="tips">导航的说明会在鼠标移动到其上面时显示</div>
                        </td>
                    </tr>
                    <tr>
                        <th>导航链接</th>
                        <td><input type="text" class="input-large" id="text" value="index.php"></td>
                        <td>
                            <div class="tips">设置导航的链接，可填写站内、站外的链接地址</div>
                        </td>
                    </tr>
                    <tr>
                        <th>导航打开方式</th>
                        <td>
                            <ul class="rowform">
                                <li>
                                    <label>
                                        <input name="target" type="radio" value="0" checked="" class="radio">
                                        <span>本窗口</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input name="target" type="radio" value="1" class="radio">
                                        <span>新窗口</span>
                                    </label>
                                </li>
                            </ul>
                        </td>
                        <td></td>
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