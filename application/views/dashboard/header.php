<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="HTML, CSS, PHP, JavaScript">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>INFINITA</title>
	<link rel="shortcut icon" href="<?= base_url('assets/img/icon.png') ?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css"/>
	<link rel="stylesheet" href="https://cdn.datatables.net/select/1.2.5/css/select.dataTables.min.css">

	<?php
		foreach($headers as $key => $header){
	?>
			<link href="<?php echo base_url('assets/css/'.$header.'.css')?>" rel="stylesheet">
	<?php	
		}
	?>
</head>
<body>