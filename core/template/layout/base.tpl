<!DOCTYPE html>

<html lang="<?=($lang)?$lang:'ru'?>">
<head>
	<base href="/">
	<meta charset="<?=($charset)?$charset:'utf-8'?>">
	
	<title><?=$title?></title>
<?if($meta_title):?>
	<meta name="title" content="<?=$meta_title?>">
<?endif;?>
<?if($meta_description):?>
	<meta name="description" content="<?=$meta_description?>">
<?endif;?>
<?if($meta_keywords):?>
	<meta name="keywords" content="<?=$meta_keywords?>">
<?endif;?>
	
	<meta name="viewport" content="width=device-width">
<?foreach ($styles as $style):?>
	<link rel="stylesheet" href="<?=$style?>">
<?endforeach;?>
<?foreach ($scripts as $script):?>
	<script src="<?=$script?>"></script>
<?endforeach;?>
<?=$head?>
</head>
<body>
<?=$this->render('common/header')?>
<?=$content?>
<?=$this->render('common/footer')?>
</body>
</html>