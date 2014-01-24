<div class="span9">
    <div class="widget widget-table">
        <div class="widget-header">
            <h3><span class="current">注册设置</span></h3>
            <h3><span>登录设置</span></h3>
        </div>
        <div class="widget-content">
            <!--注册设置-->
            <div class="contents">
                <form name="cpform" method="post" autocomplete="off" action="" id="cpform" enctype="multipart/form-data">
                    <table class="table table-striped table-bordered table-set">
                        <tbody>
                        <tr>
                            <th style="width:15%">允许新用户注册</th>
                            <td style="width:29%">
                                <ul class="rowform">
                                    <li>
                                        <label>
                                            <input type="radio" name="type" value="1" checked="" class="radio">
                                            <span>开放注册</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="type" value="1" class="radio">
                                            <span>关闭注册</span>
                                        </label>
                                    </li>
                                </ul>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>注册协议内容</th>
                            <td>
                                <textarea name="protocol" class="textarea-large">当您申请用户时，表示您已经同意遵守本规章。 欢迎您加入本站点参加交流和讨论，本站点为公共论坛，为维护网上公共秩序和社会稳定，请您自觉遵守以下条款： &lt;br&gt;
                                    一、不得利用本站危害国家安全、泄露国家秘密，不得侵犯国家社会集体的和公民的合法权益，不得利用本站制作、复制和传播下列信息： &lt;br&gt;
                                    （一）煽动抗拒、破坏宪法和法律、行政法规实施的；
                                    （二）煽动颠覆国家政权，推翻社会主义制度的；&lt;br&gt;
                                    （三）煽动分裂国家、破坏国家统一的；&lt;br&gt;
                                    （四）煽动民族仇恨、民族歧视，破坏民族团结的；&lt;br&gt;
                                    （五）捏造或者歪曲事实，散布谣言，扰乱社会秩序的；&lt;br&gt;
                                    （六）宣扬封建迷信、淫秽、色情、赌博、暴力、凶杀、恐怖、教唆犯罪的；&lt;br&gt;
                                    （七）公然侮辱他人或者捏造事实诽谤他人的，或者进行其他恶意攻击的；&lt;br&gt;
                                    （八）损害国家机关信誉的；&lt;br&gt;
                                    （九）其他违反宪法和法律行政法规的；&lt;br&gt;
                                    （十）进行商业广告行为的。&lt;br&gt;
                                    二、互相尊重，对自己的言论和行为负责。&lt;br&gt;
                                    三、禁止在申请用户时使用相关本站的词汇，或是带有侮辱、毁谤、造谣类的或是有其含义的各种语言进行注册用户，否则我们会将其删除。&lt;br&gt;
                                    四、禁止以任何方式对本站进行各种破坏行为。&lt;br&gt;
                                    五、如果您有违反国家相关法律法规的行为，本站概不负责，您的登录论坛信息均被记录无疑，必要时，我们会向相关的国家管理部门提供此类信息。</textarea>
                            </td>
                            <td>
                                <div class="tips">注册许可协议的内容。支持html代码。</div>
                            </td>
                        </tr>
                        <tr>
                            <th>同一IP重复注册[小时]</th>
                            <td><input type="number" class="input-large" name="securityIp" value="0"> 小时</td>
                            <td>
                                <div class="tips">规定时间内，同一IP将无法进行多次注册。0或留空表示不限制。</div>
                            </td>
                        </tr>
                        <tr>
                            <th>新用户注册审核</th>
                            <td>
                                <ul class="rowform">
                                    <li>
                                        <label>
                                            <input type="radio" name="activeCheck" value="1" class="radio">
                                            <span>开启</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="activeCheck" value="0" checked="" class="radio">
                                            <span>关闭</span>
                                        </label>
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <div class="tips">开启后,新用户只有通过管理员审核才能发帖。</div>
                            </td>
                        </tr>
                        <tr>
                            <th>新用户邮件激活</th>
                            <td>
                                <ul class="rowform">
                                    <li>
                                        <label>
                                            <input type="radio" name="activeMail" value="1" class="radio">
                                            <span>开启</span></label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="activeMail" value="0" checked="" class="radio">
                                            <span>关闭</span>
                                        </label>
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <div class="tips">
                                    必须先在<a href="index.php?r=admin/os/mail">邮件设置</a>中配置邮件服务并测试成功。开启后，系统将向注册 电子邮箱 发送一封验证电子邮件以确认电子邮箱的有效性。用户收到电子邮件并激活帐号后才能拥有正常的权限。
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>激活邮件标题</th>
                            <td><input type="text" class="input-large" name="activeTitle" value="来自{sitename}的注册激活邮件"></td>
                            <td>
                                <div class="tips">
                                    支持参数，如下：<br>
                                    {sitename}：站点名称<br>
                                    {username}：用户名
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>激活邮件内容</th>
                            <td>
                                <textarea class="textarea-large" name="activeContent">尊敬的{username}，
                                    &lt;br/&gt;欢迎你注册成为{sitename}的会员！
                                    &lt;br/&gt;请点击下面的链接进行帐号的激活：
                                    &lt;br/&gt;{url}
                                    &lt;br/&gt;如果不能点击链接，请复制到浏览器地址输入框访问。
                                    &lt;br/&gt;
                                    &lt;br/&gt;{sitename}
                                    &lt;br/&gt;{time}</textarea>
                            </td>
                            <td>
                                <div class="tips">
                                    支持html代码，支持参数：<br>
                                    {username}：用户名<br>
                                    {sitename}：站点名称<br>
                                    {url}：激活地址<br>
                                    {time}：发送时间。
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>发送欢迎信息</th>
                            <td>
                                <ul class="rowform">
                                    <li>
                                        <label>
                                            <input type="checkbox" name="welcomeType[]" value="1" checked="">
                                            <span>站内短信</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" name="welcomeType[]" value="2">
                                            <span>电子邮件</span>
                                        </label>
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <div class="tips">
                                    新用户注册后系统自动发送表示欢迎的站内短信或电子邮件。<br>
                                    如果开启了邮件激活,则只发送激活邮件,不发送欢迎邮件,必须先在<a href="index.php?r=admin/os/mail">邮件设置</a>中配置邮件服务并测试成功。
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>欢迎信息标题</th>
                            <td><input type="text" class="input-large" name="welcomeTitle" value="欢迎你注册成为{sitename}的会员"></td>
                            <td>
                                <div class="tips">
                                    支持参数，如下：<br>
                                    {username}：用户名<br>
                                    {sitename}：站点名称
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>欢迎信息内容</th>
                            <td>
                                <textarea class="textarea-large" name="welcomeContent">尊敬的{username}，
                                    &lt;br/&gt;欢迎你注册成为{sitename}的会员！
                                    &lt;br/&gt;
                                    &lt;br/&gt;本站全体管理人员向您问好！
                                    &lt;br/&gt;{sitename}</textarea>
                            </td>
                            <td>
                                <div class="tips">
                                    支持html代码，支持参数：<br>
                                    {username}：用户名<br>
                                    {sitename}：站点名称<br>
                                    {time}：发送时间。
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>禁用用户名</th>
                            <td>
                                <textarea class="textarea-large" name="securityBanUsername">创始人,管理员,版主,斑竹,admin</textarea>
                            </td>
                            <td>
                                <div class="tips">包含设定词汇的所有用户名将无法成功注册。如你禁用了"版主"，那么所有含有"版主"(如:我是版主)的用户名将被禁止使用。多个词之间用英文半角逗号","分隔。</div>
                            </td>
                        </tr>
                        <tr>
                            <th>用户名长度控制</th>
                            <td>
                                <input type="number" class="input-large" value="3" name="securityUsernameMin" style="width:80px;margin-right:15px;">
                                <span class="mr15">到</span>
                                <input type="number" class="input-large" value="15" name="securityUsernameMax" style="width:80px;">
                            </td>
                            <td>
                                <div class="tips">用户名字符的最小和最大长度，最小值不能小于1，最大值不能大于15。</div>
                            </td>
                        </tr>
                        <tr>
                            <th>密码长度控制</th>
                            <td>
                                <input type="number" class="input-large" value="3" name="securityPasswordMin" style="width:80px;margin-right:15px;">
                                <span class="mr15">到</span>
                                <input type="number" class="input-large" value="15" name="securityPasswordMax" style="width:80px;">
                            </td>
                            <td>
                                <div class="tips">最小值不能小于1，无最大值限制，留空表示不限制。</div>
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
            <!--注册设置-->
            <!--登录设置-->
            <div class="contents hide">
                <form name="cpform" method="post" autocomplete="off" action="" id="cpform" enctype="multipart/form-data">
                    <table class="table table-striped table-bordered table-set">
                        <tbody>
                        <tr>
                            <th style="width:15%">用户登录方式</th>
                            <td style="width:25%">
                                <ul class="rowform">
                                    <li>
                                        <label>
                                            <input type="checkbox" value="1" name="ways[]">
                                            <span>UID</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" value="2" name="ways[]">
                                            <span>电子邮箱</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" value="3" name="ways[]" checked="">
                                            <span>用户名</span>
                                        </label>
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <div class="tips">请至少选定一种用户登录方式。</div>
                            </td>
                        </tr>
                        <tr>
                            <th>密码尝试次数</th>
                            <td><input type="number" class="input-large" value="5" name="trypwd"></td>
                            <td>
                                <div class="tips">密码输入错误次数限制，超出限制次数后30分钟内不允许再登录。</div>
                            </td>
                        </tr>
                        <tr>
                            <th>密码重置邮件标题</th>
                            <td><input type="text" class="input-large" value="{username}您好，这是{sitename}发送给您的密码重置邮件" name="resetPwdMailTitle"></td>
                            <td>
                                <div class="tips">
                                    支持参数，如下：<br>
                                    {sitename}：站点名称<br>
                                    {username}：用户名
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>密码重置邮件内容</th>
                            <td>
                                <textarea class="textarea-large" name="resetPwdMailContent">尊敬的{username}，这是来自{sitename}的密码重置邮件。
                                    点击下面的链接重置您的密码：&lt;br/&gt;
                                    {url}&lt;br/&gt;
                                    如果链接无法点击，请将链接粘贴到浏览器的地址栏中访问。&lt;br/&gt;
                                    {sitename} &lt;br/&gt;
                                    {time}</textarea>
                            </td>
                            <td>
                                <div class="tips">
                                    支持html代码，支持参数：<br>
                                    {username}：用户名<br>
                                    {sitename}：站点名称<br>
                                    {url}:重置链接<br>
                                    {time}：发送时间。
                                </div>
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
            <!--登录设置-->
        </div>
    </div>
</div>