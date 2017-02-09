<?php

namespace Addons\picturetrun;
use Common\Controller\Addon;

/**
 * 头部轮播插件
 * @author wangqy
 */

    class picturetrunAddon extends Addon{

        public $info = array(
            'name'=>'picturetrun',
            'title'=>'头部轮播',
            'description'=>'公用头部轮播',
            'status'=>1,
            'author'=>'wangqy',
            'version'=>'0.1'
        );

        public function install(){
            return true;
        }

        public function uninstall(){
            return true;
        }

        //实现的picturetrun钩子方法
        public function picturetrun($param){
            // echo 'hello';
            $this->display('content');
        }

    }