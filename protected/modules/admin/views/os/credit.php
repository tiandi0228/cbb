<div class="span9">
    <div class="widget widget-table">
        <div class="widget-header">
            <h3><span class="current">积分设置</span></h3>
            <h3><span>积分策略</span></h3>
        </div>

        <div class="widget-content">
            <!--积分设置-->
            <div class="contents">
                <form name="cpform" method="post" autocomplete="off" action="" id="cpform" enctype="multipart/form-data">
                    <table class="table table-striped table-bordered table-set table-border">
                        <tr>
                            <th width="200">积分名称</th>
                            <th width="200">积分单位</th>
                            <th width="30">启用</th>
                            <th width="80">开启积分日志</th>
                            <th>操作</th>
                        </tr>
                        <tbody>
                        <tr>
                            <td><input type="text" class="input-large" id="text" value="铜币"></td>
                            <td><input type="text" class="input-large" id="text" value="枚"></td>
                            <td><input name="data[1][isshow]" type="checkbox" value="1" checked=""></td>
                            <td><input name="data[1][isshow]" type="checkbox" value="1" checked=""></td>
                            <td>-- --</td>
                        </tr>
                        <tr>
                            <td><input type="text" class="input-large" id="text" value="威望"></td>
                            <td><input type="text" class="input-large" id="text" value="点"></td>
                            <td><input name="data[1][isshow]" type="checkbox" value="1" checked=""></td>
                            <td><input name="data[1][isshow]" type="checkbox" value="1" checked=""></td>
                            <td>-- --</td>
                        </tr>
                        <tr>
                            <td><input type="text" class="input-large" id="text" value="贡献"></td>
                            <td><input type="text" class="input-large" id="text" value="点"></td>
                            <td><input name="data[1][isshow]" type="checkbox" value="1" checked=""></td>
                            <td><input name="data[1][isshow]" type="checkbox" value="1" checked=""></td>
                            <td>-- --</td>
                        </tr>
                        <tr>
                            <td><input type="text" class="input-large" id="text" value="银元"></td>
                            <td><input type="text" class="input-large" id="text" value="个"></td>
                            <td><input name="data[1][isshow]" type="checkbox" value="1"></td>
                            <td><input name="data[1][isshow]" type="checkbox" value="1"></td>
                            <td><a href="#">[删除]</a></td>
                        </tr>
                        <tr>
                            <td colspan="6" style="height:40px;padding:0 20px;line-height:40px;"><a href="#"><i class="icon-plus-sign"></i> 添加新积分</a></td>
                        </tr>
                        <tr>
                            <td colspan="6"><button type="submit" class="btn btn-primary">提交</button></td>
                        </tr>
                        </tbody>
                    </table>
                </form>
            </div>
            <!--积分设置-->
            <!--积分策略-->
            <div class="contents hide">
                <form name="cpform" method="post" autocomplete="off" action="" id="cpform" enctype="multipart/form-data">
                    <table class="table table-striped table-bordered table-set">
                        <tr>
                            <th width="200">用户行为</th>
                            <th width="200">每日奖惩上限次数</th>
                            <th>铜币</th>
                            <th>威望</th>
                            <th>贡献</th>
                        </tr>
                        <tbody>
                        <tr>
                            <td>注册</td>
                            <td>1</td>
                            <td>10</td>
                            <td>10</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>登录</td>
                            <td>1</td>
                            <td>0</td>
                            <td>2</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>发消息</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>发布主题</td>
                            <td>2</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>删除主题</td>
                            <td>-2</td>
                            <td>-2</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>发布回复</td>
                            <td>0</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>删除回复</td>
                            <td>0</td>
                            <td>-1</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>精华主题</td>
                            <td>10</td>
                            <td>10</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>取消精华</td>
                            <td>-10</td>
                            <td>-10</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>上传附件</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>下载附件</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td colspan="6"><button type="submit" class="btn btn-primary">提交</button></td>
                        </tr>
                        </tbody>
                    </table>
                </form>
            </div>
            <!--积分策略-->
        </div>
    </div>
</div>