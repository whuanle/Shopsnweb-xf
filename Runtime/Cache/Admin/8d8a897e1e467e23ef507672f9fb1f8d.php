<?php if (!defined('THINK_PATH')) exit();?><form method="post" target="_blank"
      id="form-order">
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <td style="width: 1px;" class="text-center"><input
                        type="checkbox"
                        onclick="$('input[name*=\'selected\']').prop('checked', this.checked);"></td>

                <td class="text-right"><a
                        href="javascript:Tool.sort('conditionForm', '<?php echo ($approvalModel::$id_d); ?>');">ID</a>
                </td>
                <td class="text-left">会员昵称</td>
                <td class="text-left">公司名称</td>
                <td class="text-left">申请人名字</td>
                <td class="text-left">负责人名字</td>
                <td class="text-left">审核日期</td>
                <td class="text-left">有效期</td>
                <td class="text-left">审核状态</td>
                <td class="text-left">创建时间</td>
                <td class="text-right">操作</td>
            </tr>
            </thead>
            <tbody>
            <?php if(!empty($data['data'])): if(is_array($data['data'])): $i = 0; $__LIST__ = $data['data'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><tr class="del-data">
                        <td class="text-center"><input type="checkbox"
                                                       name="selected[]" value="<?php echo ($list[$userModel::$id_d]); ?>"> <input
                                type="hidden" name="shipping_code[]" value="flat.flat"></td>
                        <td class="text-right"><?php echo ($list[$approvalModel::$id_d]); ?></td>
                        <td class="text-left"><?php echo ($list[$userModel::$userName_d]); ?></td>
                        <td class="text-left"><?php echo ($list[$approvalModel::$companyName_d]); ?></td>
                        <td class="text-left" width="164"><?php echo ($list[$approvalModel::$applyName_d]); ?></td>
                        <td class="text-left"><?php echo ($list[$approvalModel::$responName_d]); ?></td>
                        <td class="text-left"><?php echo (date("Y-m-d",$list[$approvalUserModel::$approvalTime_d])); ?></td>
                        <td class="text-left"><?php echo ($list[$approvalUserModel::$beOverdue_d]); ?>天</td>
                        <td class="text-left"><?php echo ($approval[$list[$approvalModel::$status_d]]); ?></td>
                        <td class="text-left"><?php echo (date('Y-m-d H:i',$list[$userModel::$createTime_d])); ?></td>
                        <td class="text-right"><a
                                onclick="Tool.alertEdit('<?php echo U('lookDetail',array($userModel::$id_d=>$list[$approvalModel::$id_d]));?>', '申请详情', 800, 600)"
                                data-toggle="tooltip" title="" class="btn btn-info"
                                data-original-title="查看详情"><i class="fa fa-eye"></i></a>

                            <a
                                    onclick="Tool.deleteUserApproval(this,'<?php echo U("delApprovalUser");?>',<?php echo ($list[$approvalModel::$id_d]); ?>)"
                            id="button-delete6" data-toggle="tooltip" title="删除"
                            class='btn btn-danger
                            <?php if($list[$approvalModel::$status_d]==1): ?>disabled<?php endif; ?>
                            ' data-original-title="删除"><i
                                    class="fa fa-trash-o"></i></a></td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; endif; ?>
            </tbody>
        </table>
    </div>
</form>
<div class="row">
    <div class="col-sm-3 text-left"></div>
    <div class="col-sm-6 text-right"><?php echo ($data["page"]); ?></div>
</div>
<script src="http://www.shopsn.xyz/Public/Admin/js/ajaxGetDataCommon.js"></script>