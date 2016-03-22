<?php
namespace Admin\Model;
use Think\Model;

class AdminModel extends Model{
     protected $_validate =array(
          array('username', 'require', '用户名不能为空！'), //默认情况下用正则进行验证
          array('password', 'require', '密码不能为空'), // 验证确认密码是否和密码一致
          );
}