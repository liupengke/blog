<?php
// 本文档自动生成，仅供测试运行
class IndexAction extends Action
{
    /**
    +----------------------------------------------------------
    * 默认操作
    +----------------------------------------------------------
    */
    public function index()
    {
        $Demo = new Model('Demo');
        $list = $Demo->select();
        $this->assign('list', $list);
        $this->display();
    }
    
    public function insert(){
    	$Demo = new Model('Demo');
    	$Demo->create();
    	$result = $Demo->add();
    	$this->redirect('index');
    }

    /**
    +----------------------------------------------------------
    * 探针模式
    +----------------------------------------------------------
    */
    public function checkEnv()
    {
        load('pointer',THINK_PATH.'/Tpl/Autoindex');//载入探针函数
        $env_table = check_env();//根据当前函数获取当前环境
        echo $env_table;
    }

}
?>