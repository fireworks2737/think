<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends Controller {
	
	
    public function index()
	{	
		R('Admin/Common/check_login');
		$User = M('admin');
		$count = $User->count();
		$Page = new \Think\Page($count,3);
		$show  = $Page->show();
		$list = $User->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);
		$this->assign('page',$show);
		R('Admin/Common/template',array('Admin/index'));
	}
	
	public function insert()
	{
		R('Admin/Common/check_login');
		if(!empty($_POST)){
			//print_r($_POST);exit;
			$admin = M("admin"); 
			$email = $_POST['email'];
			$result = $admin->where("`email` = '$email'")->find();
			if(!empty($result)){
				echo '<script>alert("该邮箱已存在！")</script>';
			}else{
				if($_POST['email'] == '' or $_POST['password'] == '' or $_POST['adminname'] == ''){
					echo '<script>alert("邮箱，密码或管理员名为空！")</script>';
				}
				else{
					$_POST['password'] = md5($_POST['password']);
					$admin->add($_POST);
					$this->redirect('Admin/Admin/index');
				}
			}
		}
		R('Admin/Common/template',array('Admin/insert'));
	}
	
	public function update()
	{
		$id = $_GET['id'];
		$admin = M("admin");
		$result = $admin->where("id = $id")->find();
		$this->assign('result',$result);
		if(!empty($_POST)){
			$email = $_POST['email'];
			$result = $admin->where("`email` = '$email'")->find();
			if(!empty($result)){
				echo '<script>alert("该邮箱已存在！")</script>';
			}else{
				if($_POST['password'] != $result['password']){
					$_POST['password'] = md5($_POST['password']);
				}
				$admin->where("`id` = '$id'")->save($_POST);
				$this->redirect('Admin/Admin/index');
			}
		}
		R('Admin/Common/template',array('Admin/update'));	
	}
	
	public function delete()
	{
		R('Admin/Common/check_login');
		$my_id = $_SESSION['id'];
		$id = $_GET['id'];
		$admin = M("admin"); 
		if($id == $my_id){
			echo '<script>alert("不能删除自己")</script>';
		}
		$admin->where("id = $id")->delete(); 
		$this->redirect('Admin/Admin/index');
    }
	
	public function more_delete()
	{
		R('Admin/Common/check_login');
		$my_id = $_SESSION['id'];
		$id = $_POST['id'];
		$User = M("admin");
		if(in_array($my_id,$id)){
			echo '<script>alert("不能删除自己")</script>';
		}
		foreach($id as $v){
			$User->where("id = $v")->delete();
		}
		$this->redirect('Admin/Admin/index');
    }
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}