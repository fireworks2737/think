<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
	
	
    public function login()
	{	
		if(!empty($_POST)){
			$check = R('Admin/Common/check_yanzhengma',array($_POST['yanzhengma']));
			if($check){
				$admin = M("admin"); 
				$email = addslashes(trim(stripslashes($_POST ['email'])));
				$password = md5(addslashes(trim(stripslashes($_POST ['password']))));
				if (!$email) {
					echo '<script>alert("邮箱不能为空~")</script>';
				}
				$result = $admin->where("`email` = '$email' and `password` = '$password' ")->find();
				if($result != NULL){
					$time['last_login_time']=time();
					$id = $result['id'];
					$admin->where("id = $id")->save($time);
					$_SESSION['adminname'] = $result['adminname'];
					$_SESSION['id'] = $result['id'];
					$this->redirect('Admin/Index/index');
				}else{
					echo '<script>alert("邮箱或密码错误~")</script>';
				}
			}else{
				echo '<script>alert("验证码错咯~")</script>';
			}
		}
		$this->display('login');
		
    }
	
	public function logout()
	{
		session_destroy();
		$this->redirect('Admin/Index/login');
		
    }
	
	public function index()
	{
		$time=time();
		$adminname = $_SESSION['adminname'];
		$this->assign('adminname',$adminname);
		$this->assign('time',$time);
		R('Admin/Common/template');
    }

	
}