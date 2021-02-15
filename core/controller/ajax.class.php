<?php
namespace Controller;
use Engine\Controller;


class Ajax extends Controller {
	
	public function actionIndex($data) {
		$output['content'] = $this->rk->run($data['action']);
		return $this->render($output);
	}
	
	
	public function render($data) {
		return json_encode($data);
	}
	
}