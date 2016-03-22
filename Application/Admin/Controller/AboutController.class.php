<?php
namespace Admin\Controller;
use Think\Controller;
class AboutController extends Controller {
	
	
    public function index()
	{	
		R('Admin/Common/check_login');
		$User = M('about');
		$count = $User->count();
		$Page = new \Think\Page($count,5);
		$show  = $Page->show();
		$list = $User->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);
		$this->assign('page',$show);
		R('Admin/Common/template',array('About/index'));
	}
	
	
	public function insert()
	{
		R('Admin/Common/check_login');
		if(!empty($_POST)){
			//print_r($_POST);exit;
			$about = M("about"); 
			if($_POST['name'] == '' or $_POST['jianjie'] == '' or $_FILES['img']['name'] == ''){
				echo '<script>alert("一个都不能空~")</script>';
			}
			else{
				$info = R('Admin/Common/upload');
				$_POST['photo'] = $info[img]['savepath'].$info[img]['savename'];
				$_POST['photo'] = substr($_POST['photo'],1);
				$about->add($_POST);
				$this->redirect('Admin/About/index');
			}
		}
		R('Admin/Common/template',array('About/insert'));
	}
	
	
	public function update()
	{
		$id = $_GET['id'];
		$about = M("about");
		$result = $about->where("id = $id")->find();
		$this->assign('re',$result);
		if(!empty($_POST)){
			if($_POST['name'] == '' or $_POST['jianjie'] == '' ){
				echo '<script>alert("名字或简介为空~")</script>';
			}
			if($_FILES['img']['name']){
				$info = R('Admin/Common/upload');
				unlink('.'.$result['photo']);
				$_POST['photo'] = $info[img]['savepath'].$info[img]['savename'];
				$_POST['photo'] = substr($_POST['photo'],1);
			}
			$about->where("`id` = '$id'")->save($_POST);
			$this->redirect('Admin/About/index');
		}
		R('Admin/Common/template',array('About/update'));	
	}
	
	
	public function delete()
	{
		R('Admin/Common/check_login');
		$id = $_GET['id'];
		$about = M("about"); 
		$result = $about->where("id = $id")->find();
		$about->where("id = $id")->delete(); 
		unlink('.'.$result['photo']);
		$this->redirect('Admin/About/index');
    }
	
	public function more_delete()
	{
		R('Admin/Common/check_login');
		$id = $_POST['id'];
		$User = M("about");
		foreach($id as $v){
			$result = $User->where("id = $v")->find();
			$User->where("id = $v")->delete();
			unlink('.'.$result['photo']);
		}
		$this->redirect('Admin/About/index');
    }
	
	
	
	
	
	
	
	
}