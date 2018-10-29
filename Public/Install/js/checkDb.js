/**
 * 数据监测
 */
(function (w) {

    this.TestDbPwd = function (connect_db, url) {
        var dbHost = $('#dbhost').val();
        var dbUser = $('#dbuser').val();
        var dbPwd = $('#dbpw').val();
        var dbName = $('#dbname').val();
        var dbport = $('#dbport').val();
        var data = {
            'dbhost': dbHost,
            'dbuser': dbUser,
            'dbpw'  : dbPwd,
            'dbname': dbName,
            'dbport': dbport
        };
        

        $.ajax({
            type: "POST",
            url: url,
            data: data,
            dataType: 'JSON',
            success: function (res) {
                if (res.status === 1) {
                    if (connect_db === 1) {
                        $("#J_install_form").submit(); // ajax
                        // 验证通过后再提交表单
                    }
                    $('#J_install_tip_dbpw').html(res.msg);
                } else if(res.status === 0) {
                    alert(res.msg);
                    $('#dbpw').val("");
                    $('#J_install_tip_dbpw').html('<span for="dbname" generated="true" class="tips_error" style="">' + res.msg + '</span>');
                }else if(res.status === 2){
                    if (connect_db === 1) {
                        $("#J_install_form").submit(); // ajax
                        // 验证通过后再提交表单
                    }
                    alert(res.msg);
                    $('#J_install_tip_dbname').html('<span for="dbname" generated="true" class="tips_error" style="">' + res.msg + '</span>');
                }
            },
            error: function () {
                alert('链接失败');
                $('#dbpw').val("");
                $('#J_install_tip_dbpw').html('<span for="dbname" generated="true" class="tips_error" style="">数据库链接配置失败</span>');

            }
        });
    };

    /**
     * 监测form
     */
    this.checkForm = function (url) {
        manager = $.trim($('#manager').val()); // 用户名表单
        manager_pwd = $.trim($('#manager_pwd').val()); // 密码表单
        manager_ckpwd = $.trim($('#manager_ckpwd').val()); // 密码提示区

        if (manager.length == 0) {
            alert('管理员账号不能为空');
            return false;
        }
        if (manager_pwd.length < 6) {
            alert('密码必须6位数以上');
            return false;
        }
        if (manager_ckpwd != manager_pwd) {
            alert('两次密码不一致');
            return false;
        }
        this.TestDbPwd(1, url);
    }
    w.CheckData = this;
})(window);
