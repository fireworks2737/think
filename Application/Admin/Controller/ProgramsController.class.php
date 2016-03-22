<?php
namespace Admin\Controller;
use Think\Controller;
class programsController extends Controller {
	
	
    public function index()
	{	
		R('Admin/Common/check_login');
		$User = M('programs');
		$count = $User->count();
		$Page = new \Think\Page($count,5);
		$show  = $Page->show();
		$list = $User->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);
		$this->assign('page',$show);
		R('Admin/Common/template',array('programs/index'));
	}
	
	
	public function insert()
	{
		R('Admin/Common/check_login');
		if(!empty($_POST)){
			//print_r($_POST);exit;
			$programs = M("programs"); 
			if($_FILES['pdf_src']['name'] == '' or $_POST['pdf_name'] == ''){
				echo '<script>alert("一个都不能空~")</script>';
			}
			else{
				$info = R('Admin/Common/upload');
				$_POST['pdf_src'] = $info['pdf_src']['savepath'].$info['pdf_src']['savename'];
				$_POST['pdf_src'] = substr($_POST['pdf_src'],1);
				$programs->add($_POST);
				$this->redirect('Admin/Programs/index');
			}
		}
		R('Admin/Common/template',array('programs/insert'));
	}
	
	
	public function update()
	{
		$id = $_GET['id'];
		$programs = M("programs");
		$result = $programs->where("id = $id")->find();
		$this->assign('result',$result);
		if(!empty($_POST)){
			if($_FILES['pdf_src']['name']){
				$info = R('Admin/Common/upload');
				unlink('.'.$result['photo']);
				$_POST['pdf_src'] = $info['pdf_src']['savepath'].$info['pdf_src']['savename'];
				$_POST['pdf_src'] = substr($_POST['pdf_src'],1);
			}
			$programs->where("`id` = '$id'")->save($_POST);
			$this->redirect('Admin/Programs/index');
		}
		R('Admin/Common/template',array('programs/update'));	
	}
	
	
	public function delete()
	{
		R('Admin/Common/check_login');
		$id = $_GET['id'];
		$programs = M("programs"); 
		$result = $programs->where("id = $id")->find();
		$programs->where("id = $id")->delete(); 
		unlink('.'.$result['pdf_src']);
		$this->redirect('Admin/programs/index');
    }
	
	public function more_delete()
	{
		R('Admin/Common/check_login');
		$id = $_POST['id'];
		$User = M("programs");
		foreach($id as $v){
			$result = $User->where("id = $v")->find();
			$User->where("id = $v")->delete();
			unlink('.'.$result['pdf_src']);
		}
		$this->redirect('Admin/Programs/index');
    }
	
	
	
	
	
	
	
	
}