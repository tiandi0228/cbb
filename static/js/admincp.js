$(document).ready(function(){

    //站点状态
    $(".rowform #hide").click(function(){
        $(".visitmessage").hide();
    });
    $(".rowform #show").click(function(){
        $(".visitmessage").show();
    });

    //Tab滑动效果
    $('.widget-header span').click(function(){
        $('.widget-header span').removeClass("current");
        $(this).addClass("current");
        $(".contents").slideUp('1500').eq($('.widget-header span').index(this)).slideDown('1500');
    });

    //添加导航
    $(".addnav").click(function(){
        $str='';
        $str+="<tr>";
        $str+="<td><input type='text' class='input-large' id='orderid' name='newdata[orderid]' style='width:15px;'></td>";
        $str+="<td><input type='text' class='input-large' id='name' name='newdata[name]' style='width:80%;'></td>";
        $str+="<td><input type='text' class='input-large' id='link' name='newdata[link]'></td>";
        $str+="<td><input name='newdata[isshow]' type='checkbox' value='1' checked></td>";
        $str+="<td onClick='getDel(this)'><a href='javascript:;'>[删除]</a></td>";
        $str+="</tr>";
        $(".table tbody.first").append($str);
    });

    //用户全反选
    $("#checkall").click(function(){
        $("input[name='uid[]']").each(function(){
            if ($(this).is(":checked")){
                $(this).removeAttr('checked');
            }
            else{
                $(this).attr('checked','checked');
            }
        });
    });

    //数据库全反选
    $("#checkall").click(function(){
        $("input[name='tabledb[]']").each(function () {
            if ($(this).is(":checked")){
                $(this).removeAttr('checked');
            }
            else{
                $(this).attr('checked','checked');
            }
        });
    });

    //设置默认属性
    $.validator.setDefaults({
        submitHandler: function(form) {
            form.submit();
        }
    }),

    //开始验证
    $("#form").validate({
        rules: {
            password: {
                required: false,
                minlength: 6
            },
            repassword: {
                required: false,
                minlength: 6,
                equalTo: "#password"
            },
            realname: {
                minlength:2
            },
            homepage: {
                url: true
            },
            website: {
                url: true
            },
            email: {
                required: false,
                email: true,
                //remote: "/index.php?r=admin/check/email"
            },
            msn: {
                required: false,
                email: true
            },
            mobile: {
                maxlength: 11,
                minlength: 11,
                number: true
            },
            qq: {
                number: true
            },
            endtime: {
                required: true,
                date: true
            },
            reason: {
                required: true
            }
        },
        messages: {
            realname: {
                minlength: jQuery.format("真实姓名不能少于{0}个字")
            },
            homepage: {
                url: "请输入正确的url地址"
            },
            website: {
                url: "请输入正确的url地址"
            },
            email: {
                remote: "此邮箱已被注册"
            },
            reason: {
                required: "必填"
            },
            endtime: {
                required: "必填"
            }
        },
        //设置错误信息存放标签
        errorElement: "div",
        //指定错误信息位置
        errorPlacement: function(error, element) {
            if ( element.is(":radio") )
                error.appendTo( element.parent().next().next() );
            else if ( element.is(":checkbox") )
                error.appendTo ( element.next() );
            else
                error.appendTo( element.parent().next() );
        },
        //设置验证触发事件
        focusInvalid: true,
        //设置验证成功提示格式
        success:function(e)
        {
            e.html("&nbsp;").addClass("success");
        }
    })
});
function getDel(k){
    $(k).parent().remove();
}
$(document).ready(function(){

    //站点状态
    $(".rowform #hide").click(function(){
        $(".visitmessage").hide();
    });
    $(".rowform #show").click(function(){
        $(".visitmessage").show();
    });

    //Tab滑动效果
    $('.widget-header span').click(function(){
        $('.widget-header span').removeClass("current");
        $(this).addClass("current");
        $(".contents").slideUp('1500').eq($('.widget-header span').index(this)).slideDown('1500');
    });

    //添加导航
    $(".addnav").click(function(){
        $str='';
        $str+="<tr>";
        $str+="<td><input type='text' class='input-large' id='orderid' name='newdata[orderid]' style='width:15px;'></td>";
        $str+="<td><input type='text' class='input-large' id='name' name='newdata[name]' style='width:80%;'></td>";
        $str+="<td><input type='text' class='input-large' id='link' name='newdata[link]'></td>";
        $str+="<td><input name='newdata[isshow]' type='checkbox' value='1' checked></td>";
        $str+="<td onClick='getDel(this)'><a href='javascript:;'>[删除]</a></td>";
        $str+="</tr>";
        $(".table tbody.first").append($str);
    });

    //用户全反选
    $("#checkall").click(function(){
        $("input[name='uid[]']").each(function(){
            if ($(this).is(":checked")){
                $(this).removeAttr('checked');
            }
            else{
                $(this).attr('checked','checked');
            }
        });
    });

    //数据库全反选
    $("#checkall").click(function(){
        $("input[name='tabledb[]']").each(function () {
            if ($(this).is(":checked")){
                $(this).removeAttr('checked');
            }
            else{
                $(this).attr('checked','checked');
            }
        });
    });

    //设置默认属性
    $.validator.setDefaults({
        submitHandler: function(form) {
            form.submit();
        }
    }),

    //开始验证
    $("#form").validate({
        rules: {
            password: {
                required: false,
                minlength: 6
            },
            repassword: {
                required: false,
                minlength: 6,
                equalTo: "#password"
            },
            realname: {
                minlength:2
            },
            homepage: {
                url: true
            },
            website: {
                url: true
            },
            email: {
                required: false,
                email: true,
                //remote: "/index.php?r=admin/check/email"
            },
            msn: {
                required: false,
                email: true
            },
            mobile: {
                maxlength: 11,
                minlength: 11,
                number: true
            },
            qq: {
                number: true
            },
            endtime: {
                required: true,
                date: true
            },
            reason: {
                required: true
            }
        },
        messages: {
            realname: {
                minlength: jQuery.format("真实姓名不能少于{0}个字")
            },
            homepage: {
                url: "请输入正确的url地址"
            },
            website: {
                url: "请输入正确的url地址"
            },
            email: {
                remote: "此邮箱已被注册"
            },
            reason: {
                required: "必填"
            },
            endtime: {
                required: "必填"
            }
        },
        //设置错误信息存放标签
        errorElement: "div",
        //指定错误信息位置
        errorPlacement: function(error, element) {
            if ( element.is(":radio") )
                error.appendTo( element.parent().next().next() );
            else if ( element.is(":checkbox") )
                error.appendTo ( element.next() );
            else
                error.appendTo( element.parent().next() );
        },
        //设置验证触发事件
        focusInvalid: true,
        //设置验证成功提示格式
        success:function(e)
        {
            e.html("&nbsp;").addClass("success");
        }
    })
});