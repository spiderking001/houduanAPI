<?php

namespace app\validate;

class Notice extends BaseValidate
{
    /**
     * 定义验证规则
     * 格式：'字段名'	=>	['规则1','规则2'...]
     *
     * @var array
     */	
	protected $rule = [
        'page' => 'require|integer|>:0',
        'id'=>'require|integer|>:0|isExist',
        'title'=>'require',
        'content'=>'require',
    ];
    
    /**
     * 定义错误信息
     * 格式：'字段名.规则名'	=>	'错误信息'
     *
     * @var array
     */	
    protected $message = [];

    protected $scene = [
        'index'=>['page'],
        'save'=>['title','content'],
        'update'=>['id','title','content'],
        'delete'=>['id']
    ];
}
