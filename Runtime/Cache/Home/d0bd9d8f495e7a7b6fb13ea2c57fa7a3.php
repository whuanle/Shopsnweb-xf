<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://www.shopsn.xyz/Public/Home/css/base.css">
    <link rel="stylesheet" href="http://www.shopsn.xyz/Public/Home/css/style.css">
    <link rel="stylesheet" href="http://www.shopsn.xyz/Public/Home/css/payment.css">
    <link rel="stylesheet" href="http://www.shopsn.xyz/Public/Common/css/page.css">
    <script src="//lib.sinaapp.com/js/jquery/1.7.2/jquery.min.js"></script>
    <script src="http://www.shopsn.xyz/Public/Common/js/layer/layer.js"></script>
    <style>
        .personaM-content-wrap{
            width: 460px;
            margin-left: 20px;
            margin-top: 20px;
        }
        .personaM-content-wrap div{
            border: 1px solid #e7e6e6;
        }
        .personaM-content-wrap .top{
            font-size: 20px;
            padding: 5px 5px;
            color: firebrick;
        }
        .personaM-content-wrap .text{
            padding: 10px 15px;
        }

        .table{
            font-family: 'Microsoft YaHei';
            margin: 0;
            padding: 0;
            list-style: none;
            display: table;
            /*border: 1px solid #ddd;*/
            border-collapse:collapse;
            font-size: 13px;
        }
        .table th{
            border-top: 0;
            border-bottom-width: 2px;
            border: 1px solid #ddd;

        }
        .table td{
            border-top: 0;
            border-bottom-width: 2px;
            border: 1px solid #ddd;
            padding: 5px;

        }
    </style>
</head>
<body>
    <div class="mordrMain  personaM-content-wrap">
        <div class="top">
            提现列表
        </div>
        <div class="text">
            <table class="table">
                <tr>
                    <th>序号</th>
                    <th>提现编号</th>
                    <th width="20%">提现金额</th>
                    <th width="20%">申请时间</th>
                    <th width="20%">提现方式</th>
                    <th width="20%">当前状态</th>
                    <th width="20%">处理时间</th>
                </tr>
                <?php if(is_array($data)): foreach($data as $key=>$v): ?><tr>
                        <td><?php echo ($v["id"]); ?></td>
                        <td><?php echo ($v["drawal_id"]); ?></td>
                        <td><?php echo ($v["money"]); ?></td>
                        <td><?php echo date('Y-m-d H:i',$v['create_time']);?></td>
                        <td><?php echo ($v["type"]); ?></td>
                        <td><?php echo ($v["status"]); ?></td>
                        <td><?php echo date('Y-m-d H:i',$v['last_time']);?></td>
                    </tr><?php endforeach; endif; ?>

            </table>
        </div>

    </div>

</body>
<script>


</script>
</html>