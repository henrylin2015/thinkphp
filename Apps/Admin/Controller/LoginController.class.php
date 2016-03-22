<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Model\Admin_users;

class LoginController extends Controller{
     public function index(  ){
                 $this->redirect(U('Login/login'), 5, '请登录系统。。。');
            }
     public function login(  ){
                if( IS_POST ){
                     $login = D( 'admin' );
                     // 自动验证 创建数据集
                     if (!$data = $login->create()) {
                          // 防止输出中文乱码
                          header("Content-type: text/html; charset=utf-8");
                          $this->error($login->getError(  ));
                          exit();
                     }
                      // 组合查询条件
                     $where = array(  );
                     $where[ 'username' ] = $data[ 'username' ];
                     $res = $login->where( $where )->find(  );
                     // 验证用户名 对比 密码
                     if ($res && $res['password'] == $data['password']) {
                          // 存储session
                          session('uid',$res[ 'userid']);          // 当前用户id
                          session('nickname', $res['nickname']);   // 当前用户昵称
                          session('username', $res['username']);   // 当前用户名
                          session('lastdate', $res['lastdate']);   // 上一次登录时间
                          session('lastip', $res['lastip']);       // 上一次登录ip
                          // 更新用户登录信息
                          $where['userid'] = session('uid');
                          M('admin')->where($where)->setInc('loginnum');   // 登录次数加 1
                          M('admin')->where($where)->save($data);   // 更新登录时间和登录ip
                          $this->success('登录成功,正跳转至系统首页...', U('Manage/index'));
                          return ;
                     } else {
                          $this->error('登录失败,用户名或密码不正确!');
                          return ;
                     }
                }
                 $this->display(  );
            }

     /**
     * 用户注销
     */
    public function logout()
    {
        // 清楚所有session
        session(null);
        header("Content-type: text/html; charset=utf-8");
        redirect(U('Login/login'), 2, '正在退出登录...');
    }
}