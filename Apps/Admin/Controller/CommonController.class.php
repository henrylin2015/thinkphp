<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller{

     public function __construct(){
                 parent::__construct(  );
                 $this->filterLogin(  );
            }
     protected function filterLogin() {
                    if (!$_SESSION['username'] && !$_SESSION[ 'uid' ]) {
                         //跳转到认证网关
                         $this->error('请先登录后台管理',C( 'login/login' ));
                    }
               }
}