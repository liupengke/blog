<?php
class CreateAction extends Action{
	public function index(){
		$articles = M('Article');
		$num = $articles->select();
		echo count($num);
		$this->assign("anum", count($num));
		$this->display();
	}
	public function submit(){
		$article = M("Article");
		$data['title'] = $_REQUEST['title'] || 'name';
		$data['content'] = $_REQUEST['content'];
		$data['tag'] = 'hoho';
		$article->add($data);
	}
}