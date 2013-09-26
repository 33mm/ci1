<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/bootstrap/css/bootstrap.css">
	

</head>
<body>
	<a href="<?=base_url()?>">base_url</a>
	<br/><br/>

	<?php  
		echo "HW";
		
		$xml=simplexml_load_file("/home/min/Desktop/www/ci/ci/assets/xml/foxy.xml");
		print_r($xml);

		$xml->savexmL("/home/min/Desktop/www/ci/ci/assets/xml/foxys.xml");



	?>

</body>
</html>
