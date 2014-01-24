<div class="span9">
    <div class="widget widget-table">
        <div class="widget-header">
            <h3>SEO设置</h3>
        </div>
        <div class="widget-content">
            <form name="cpform" method="post" autocomplete="off" action="" id="cpform" enctype="multipart/form-data">
                <table class="table table-striped table-bordered table-set">
                    <tr>
                        <th>页面</th>
                        <th>标记</th>
                        <th>格式</th>
                        <th>可用</th>
                    </tr>
                    <tbody>
                    <tr>
                        <td style="width:15%">论坛主题列表页</td>
                        <td>{fid}, {page}</td>
                        <td><input type="text" class="input-large" id="text" value="forum-{fid}-{page}.html"></td>
                        <td><input name="data[1][isshow]" type="checkbox" value="1" checked=""></td>
                    </tr>
                    <tr>
                        <td>论坛主题内容页</td>
                        <td>{tid}, {page}, {prevpage}</td>
                        <td><input type="text" class="input-large" id="text" value="thread-{tid}-{page}-{prevpage}.html"></td>
                        <td><input name="data[1][isshow]" type="checkbox" value="1" checked=""></td>
                    </tr>
                    <tr>
                        <td colspan="6"><button type="submit" class="btn btn-primary">提交</button></td>
                    </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</div>