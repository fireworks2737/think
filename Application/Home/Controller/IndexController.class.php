<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    
	public function index()
	{
		$User = M('homepage');
		$result = $User->find();
		$this->assign('result',$result);
		$this->display('home_page');
	}
	
	public function contact()
	{
		$this->display('contact');
	}
	
	public function patient()
	{
		$User = M('patient');
		$result = $User->limit(0,12)->order('id desc')->select();
		$this->assign('result',$result);
		$this->display('patient');
	}
	
	public function about()
	{
		$User = M('about');
		$count = $User->count();
		$Page = new \Think\Page($count,3);
		$show  = $Page->show();
		$list = $User->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);
		$this->assign('page',$show);
		$this->display('about');
	}
	
	public function programs()
	{
		$User = M('programs');
		$result = $User->limit(0,12)->order('id desc')->select();
		$this->assign('result',$result);
		$this->display('programs');
	}
	
	public function email()
	{
		if(!empty($_POST['fn']) and !empty($_POST['ln']) and 
		!empty($_POST['em']) and !empty($_POST['co'])){
			$to = "2607728488@qq.com";
			$subject = $_POST['fn'].$_POST['ln'];
			$em = $_POST['em'];
			$message = $_POST['co'];
			import('ORG.Mail');
			$result = Sendmail($to,$em,$message,$subject);
			if ($result) {
				echo "<script>alert('successfully~');location.href=
					'".__APP__."/Home/Index/contact';</script>";
			}else{
				echo "<script>alert('Email could not be sent');location.href=
					'".__APP__."/Home/Index/contact';</script>";
			}
		}else{
			echo "<script>alert('一个都不能空~!');location.href=
				'".__APP__."/Home/Index/contact';</script>";
		}
	}
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
}