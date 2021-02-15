<?php
return [
	[
		'ajax' => true,
		'rule' => '(.*)',
		'action' => 'ajax/index(action)'
	],
	[
		'ajax' => false,
		'rule' => '/',
		'action' => 'page/index'
	],
	[
		'rule' => '.*',
		'action' => 'index/error404'
	],
];