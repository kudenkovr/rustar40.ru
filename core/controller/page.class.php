<?php
namespace Controller;
use Engine\Controller;


class Page extends Controller {
	
	public function actionIndex($data) {
		return $this->view->render('index', 'layout/base');
	}
	
}