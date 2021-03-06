<?php

// +----------------------------------------------------------------------
// | OnlineRetailers [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2003-2023 www.yisu.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed 亿速网络（http://www.yisu.cn）
// +----------------------------------------------------------------------
// | Author: 王强 <opjklu@126.com>\n
// +----------------------------------------------------------------------

namespace Admin\Model;

use Common\Model\BaseModel;

/**
 * 包邮条件表 
 */
class FreightConditionModel extends BaseModel
{
    /**
     * @var FreightConditionModel
     */
    private static $obj;

	public static $id_d;	//id

	public static $freightId_d;	//运费主表Id

	public static $mailArea_num_d;	//包邮件数，默认0

	public static $mailArea_wieght_d;	//包邮重量

	public static $mailArea_volume_d;	//包邮体积

	public static $mailArea_monery_d;	//包邮金额

	public static $createTime_d;	//创建时间

	public static $updateTime_d;	//更新时间

    /**
     * 获取类的实例
     * @return \Admin\Model\FreightConditionModel
     */
    public static function getInitnation()
    {
        
        $class = __CLASS__;
        return  static::$obj= !(static::$obj instanceof $class) ? new static() : static::$obj;
    }
    
    /**
     * 保存 
     * @param array 提交的数据
     * @return bool
     */
    public function saveCondition(array $post) 
    {
        if (!$this->isEmpty($post)) {
            return false;
        }
        
        $this->startTrans();
        
        return $this->save($post);
    }
    
    /**
     * 添加条件 
     * @param array $post post 数据
     * @return bool
     */
    public function addCondition (array $post)
    {
        if (!$this->isEmpty($post)) {
            return false;
        }
        
        $this->startTrans();
        
        $status = $this->add($post);
        
        if (empty($status)) {
            $this->rollback();
            return false;
        }
        return $status;
    }
    /**
     * 添加前操作
     * {@inheritDoc}
     * @see \Think\Model::_before_insert()
     */
    protected function _before_insert(& $data, $options)
    {
        $data[static::$updateTime_d] = time();
        $data[static::$createTime_d]    = time();
        return $data;
    }
    /**
     * 更新前操作
     * {@inheritDoc}
     * @see \Think\Model::_before_update()
     */
    protected function _before_update(& $data, $options)
    {
        $data[static::$updateTime_d] = time();
    
        return $data;
    }
}