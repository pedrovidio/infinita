<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
	<title>INFINITA</title>

	<?php
		foreach($headers as $key => $header){
	?>
			<link href="<?php echo base_url('assets/css/'.$header.'.css')?>" rel="stylesheet">
	<?php	
		}
	?>
</head>
<body>