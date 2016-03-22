<?php
namespace Admin\Controller;
use Think\Controller;
class HomepageController extends Controller {
	
	
    public function index()
	{	
		R('Admin/Common/check_login');
		$User = M('homepage');
		$result = $User->find();
		$this->assign('re',$result);
		R('Admin/Common/template',array('Homepage/index'));
	}
	
	
	public function update()
	{	//print_r($_POST);exit;
		$User = M('homepage');
		$result = $User->find();
		$this->assign('result',$result);
		$id = $result['id'];
		if(!empty($_POST['left_txt']) or !empty($_POST['right_title']) or !empty($_POST['right_content'])){
			if($_FILES['img']['name'] or $_FILES['word']['name']){
				$info = R('Admin/Common/upload');
				if($_FILES['img']['name']){
					unlink('.'.$result['left_img']);
					$_POST['left_img'] = $info[img]['savepath'].$info[img]['savename'];
					$_POST['left_img'] = substr($_POST['left_img'],1);
				}
				if($_FILES['word']['name']){
					unlink('.'.$result['word_src']);
					$_POST['word_src'] = $info[word]['savepath'].$info[word]['savename'];
					$_POST['word_src'] = substr($_POST['word_src'],1);
				}
			}	
			$User->where("`id` = '$id'")->save($_POST);
			$this->redirect('Admin/Homepage/index');
		}
		R('Admin/Common/template',array('Homepage/update'));	
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}