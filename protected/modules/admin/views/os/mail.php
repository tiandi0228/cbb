<div class="span9">
    <div class="widget widget-table">
        <div class="widget-header">
            <h3><span class="current">电子邮件设置</span></h3>
            <h3><span>电子邮件检测</span></h3>
        </div>
        <div class="widget-content">
            <!--电子邮件设置-->
            <div class="contents">
                <form name="cpform" method="post" autocomplete="off" action="" id="cpform" enctype="multipart/form-data">
                    <table class="table table-striped table-bordered table-set">
                        <tbody>
                        <tr>
                            <th style="width:15%">邮件发送</th>
                            <td>
                                <ul class="rowform">
                                    <li>
                                        <label>
                                            <input type="radio" name="mailOpen" value="1" class="radio">
                                            <span>开启</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="mailOpen" value="0" checked="" class="radio">
                                            <span>关闭</span>
                                        </label>
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <div class="tips">开启后可以给用户发送电子邮件。</div>
                            </td>
                        </tr>
                        <tr>
                            <th>SMTP服务器</th>
                            <td><input type="text" class="input-large" id="text" value=""></td>
                            <td>
                                <div class="tips">smtp.126.com</div>
                            </td>
                        </tr>
                        <tr>
                            <th>SMTP端口</th>
                            <td><input type="text" class="input-large" id="text" value="465"></td>
                            <td>
                                <div class="tips">端口号465或587</div>
                            </td>
                        </tr>
                        <tr>
                            <th>发信人地址</th>
                            <td><input type="text" class="input-large" id="text" value=""></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>SMTP用户身份验证</th>
                            <td>
                                <ul class="rowform">
                                    <li>
                                        <label>
                                            <input type="radio" name="mailAuth" value="1" class="radio">
                                            <span>开启</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="mailAuth" value="0" checked="" class="radio">
                                            <span>关闭</span>
                                        </label>
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <div class="tips">如果SMTP服务器要求通过身份验证才可以发邮件，请选择"开启"。</div>
                            </td>
                        </tr>
                        <tr>
                            <th>验证用户名</th>
                            <td><input type="text" class="input-large" id="text" value=""></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>验证密码</th>
                            <td><input type="password" class="input-large" id="text" value="******"></td>
                            <td>
                                <div class="tips">安全考虑，只显示密码的前后两位，中间显示八个 * 号。</div>
                            </td>
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
            <!--电子邮件设置-->
            <!--电子邮件检测-->
            <div class="contents hide">
                <form name="cpform" method="post" autocomplete="off" action="" id="cpform" enctype="multipart/form-data">
                    <table class="table table-striped table-bordered table-set">
                        <tbody>
                        <tr>
                            <th style="width:15%">发件人地址</th>
                            <td><input type="text" class="input-large" id="text" value=""></td>
                        </tr>
                        <tr>
                            <th>收件人地址</th>
                            <td><input type="text" class="input-large" id="text" value=""></td>
                        </tr>
                        <tr>
                            <th>邮件内容</th>
                            <td>
                                <div class="email-example">
                                    <h4>测试邮件：</h4>
                                    <p>标题：{sitename} 测试邮件</p>
                                    <p>内容：恭喜您，如果您收到此邮件则代表后台邮件发送设置正确！</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>&nbsp;</th>
                            <td><button type="submit" class="btn btn-primary">检测邮件发送设置</button></td>
                        </tr>
                        </tbody>
                    </table>
                </form>
            </div>
            <!--电子邮件检测-->
        </div>
    </div>
</div>