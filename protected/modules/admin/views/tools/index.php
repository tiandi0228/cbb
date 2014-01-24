<div class="span9">
    <div class="widget widget-table">
        <div class="widget-header">
            <h3><span class="current">数据库备份</span></h3>
            <h3><span>数据库还原</span></h3>
        </div>
        <div class="widget-content">
            <!--数据库备份-->
            <div class="contents">
                <form name="cpform" method="post" autocomplete="off" action="" id="cpform" enctype="multipart/form-data">
                    <table class="table table-striped table-bordered table-set">
                        <tbody>
                        <tr>
                            <th colspan="3"><b>功能说明</b></th>
                        </tr>
                        <tr>
                            <th colspan="3">
                                <ol>
                                    <li>推荐使用mysqldump、phpmyadmin、navicat等专业的mysql工具来备份还原。</li>
                                </ol>
                            </th>
                        </tr>
                        <tr>
                            <th colspan="3"><b>数据表</b></th>
                        </tr>
                        <tr>
                            <th style="width:15%">数据表列表</th>
                            <td colspan="2">
                                <div class="sql_list J_check_wrap">
                                    <dl>
                                        <dt>
                                            <span class="span_1"><label><input name="checkall" type="checkbox" id="checkall" value="check" class="J_check_all"><em>全选</em></label></span>
                                            <span class="span_2"><a href="#">全部数据表</a> | <a href="#">系统数据表（2）</a></span>
                                            <span class="span_3">描述</span>
                                        </dt>
                                        <dd>
                                            <?php for($i=1;$i<=10;$i++){?>
                                            <p>
                                                <span class="span_1"><input name="tabledb[]" id="tabledb[]" class="J_check" type="checkbox" value=""></span>
                                                <span class="span_2">cbb_user</span>
                                                <span class="span_3">用户基本表</span>
                                            </p>
                                            <?php }?>
                                        </dd>
                                    </dl>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="3"><b>数据备份选项</b></th>
                        </tr>
                        <tr>
                            <th>使用扩展插入方式</th>
                            <td>
                                <ul class="rowform">
                                    <li>
                                        <label>
                                            <input type="radio" name="insertmethod" value="common" checked="">
                                            <span>开启</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="insertmethod" value="common">
                                            <span>关闭</span>
                                        </label>
                                    </li>
                                </ul>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>分卷备份</th>
                            <td><input type="text" class="input-large" id="text" value="1024"></td>
                            <td>
                                <div class="tips">每个分卷文件长度（单位：KB）</div>
                            </td>
                        </tr>
                        <tr>
                            <th>压缩备份文件</th>
                            <td>
                                <ul class="rowform">
                                    <li>
                                        <label>
                                            <input type="radio" name="compress" value="1" checked="">
                                            <span>开启</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="compress" value="0">
                                            <span>关闭</span>
                                        </label>
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <div class="tips">压缩备份文件以减少占用的空间</div>
                            </td>
                        </tr>
                        <tr>
                            <th>&nbsp;</th>
                            <td>
                                <button type="submit" class="btn btn-primary mr15">备份</button>
                                <button type="submit" class="btn mr15">修复</button>
                                <button type="submit" class="btn">优化</button>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        </tbody>
                    </table>
                </form>
            </div>
            <!--数据库备份-->
            <!--数据库还原-->
            <div class="contents hide">
                <form name="cpform" method="post" autocomplete="off" action="" id="cpform" enctype="multipart/form-data">
                    <table class="table table-striped table-bordered table-set table-border">
                        <thead>
                        <tr>
                            <td><label><input class="J_check_all" type="checkbox"><span>全选</span></label></td>
                            <td>目录名</td>
                            <td>类型</td>
                            <td>版本</td>
                            <td>备份时间</td>
                            <td>分卷号</td>
                            <td>操作</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><input class="J_check" type="checkbox" name="files[]" value="cbb_9-0_20131227142414_3n648"></td>
                            <td><a href="#">cbb_9-0_20131227142414_3n648</a></td>
                            <td>目录</td>
                            <td>1.0</td>
                            <td>2013-12-27 14:24</td>
                            <td>-</td>
                            <td><a href="#">[导入]</a></td>
                        </tr>
                        <tr>
                            <td colspan="7">
                                <label class="mr15" style="margin-top:5px;"><input type="checkbox" class="J_check_all"><span>全选</span></label>
                                <button type="submit" class="btn btn-primary">删除</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </form>
            </div>
            <!--数据库还原-->
        </div>
    </div>
</div>