<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {
	
	
	
	public function yanzhengma()
	{
		$config =    array(
		'fontSize'    =>    30,    
		'length'      =>    4,     
		'useNoise'    =>    false, 
		'useCurve'    =>    false,
		);
		$Verify = new \Think\Verify($config);
		$Verify->codeSet = '0123456789'; 
		$Verify->entry();
	}
	
	public function check_yanzhengma($code, $id = '')
	{
		$verify = new \Think\Verify();
		return $verify->check($code, $id);
	}
	
	public function check_login()
	{
		if(!array_key_exists('adminname',$_SESSION)){
			$this->redirect('Admin/Index/login');
			exit;
		}
	}
	
	public function template($a = 'Index/index')
	{
		$this->display('Common/header');
		$this->display("$a");
		$this->display('Common/footer');
	}
	
	public function upload()
	{	
		$upload = new \Think\Upload();// 实例化上传类  
		$upload->maxSize   =     20*1024*1024 ;// 设置附件上传大小  
		//$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型  
		$upload->rootPath  =      './'; // 设置附件上传根目录 
		$upload->savePath  =      './Public/Uploads/'; // 设置附件上传目录  
		// 上传文件  
		$info   =   $upload->upload(); 		
		if(!$info) {
			// 上传错误提示错误信息     
			$this->error($upload->getError());  
		}else{
			// 上传成功     
			$this->success('上传成功！');    
		}
		return $info;
	}
	
	
	
}		