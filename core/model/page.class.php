<?php
namespace Model;
use Engine\Model;


class Page extends Model {
	public $title = 'ООО "РусТар" – Деревянная тара на заказ';
	public $meta_title = 'Деревянная тара на заказ';
	public $meta_description = 'Производство тары на заказ из фанеры, доски, ОСП или металла';
	public $meta_keywords = 'купить деревянную тару, производство тары, изготовление тары, металлическая тара';
	
	public $styles = array();
	public $scripts = array();
	
	
	public function init() {
		$this->styles[] = '/assets/rk.normalize-last.css';
		$this->styles[] = '/assets/rk.grid-last.css';
		$this->scripts[] = '/assets/jquery-last.min.js';
		
		/* Site data from DB */
		$this->phone = '8 (920) 893-30-63';
		$this->city_phone = '8 (4842) 40-03-06';
		$this->email = 'info@rustar40.ru';
	}
	
}