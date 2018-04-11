<?php
/**
 * 物流自提服务站首页
 *
 * 
 * 
 * 
 * @since      
 */



defined('In33hao') or exit('Access Invalid!');

class indexControl extends BaseChainCenterControl{
    public function __construct(){
        parent::__construct();
        redirect('index.php?act=goods');
    }

}
