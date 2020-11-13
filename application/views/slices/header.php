<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
	<title>INFINITA</title>
	<link rel="shortcut icon" href="assets/img/icon.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<?php
		foreach($headers as $key => $header){
	?>
			<link href="<?php echo base_url('assets/css/'.$header.'.css')?>" rel="stylesheet">
	<?php	
		}
	?>
</head>
<body>