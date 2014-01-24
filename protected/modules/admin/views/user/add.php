<div class="span9">
    <div class="widget widget-table">
        <div class="widget-header">
            <h3>添加用户</h3>
        </div>
        <div class="widget-content">
            <!--添加用户-->
            <div class="contents">
                <?php $form=$this->beginWidget('CActiveForm', array('id'=>'register','enableClientValidation'=>true,'enableAjaxValidation'=>false,'clientOptions'=>array('validateOnSubmit'=>true,))); ?>
                <?=$form->errorSummary($model,null,null,array('class'=>'alert alert-error','style'=>'font-weight:bold'));?>
                    <table class="table table-striped table-bordered table-set">
                        <tbody>
                        <tr>
                            <th style="width:15%">用户名</th>
                            <td><input class="input-large" autocomplete="off" name="UserForm[username]" id="UserForm_username" type="text" /></td>
                        </tr>
                        <tr>
                            <th>密　码</th>
                            <td><input class="input-large" autocomplete="off" name="UserForm[password]" id="UserForm_password" type="text" /></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><input class="input-large" autocomplete="off" name="UserForm[email]" id="UserForm_email" type="text" /></td>
                        </tr>
                        <tr>
                            <th>用户组</th>
                            <td>
                                <select name="UserForm[groupid]" id="UserForm_groupid">
                                    <option value="0">普通组</option>
                                    <option value="1">管理员</option>
                                    <option value="2">总版主</option>
                                    <option value="3">论坛版主</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>&nbsp;</th>
                            <td><button type="submit" class="btn btn-primary">提交</button></td>
                        </tr>
                        </tbody>
                    </table>
                <?php $this->endWidget(); ?>
            </div>
            <!--添加用户-->
        </div>
    </div>
</div>