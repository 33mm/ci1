
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Title of the document</title>

	<!-- does not seem to be working -->
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/bootstrap/css/bootstrap.css'); ?>" >
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/bootstrap/css/bootstrap.css">

</head>

<body>
Content of the document...<br/><br/>
<a href="http://localhost/ci/ci1/index.php/site/store1">Store1</a><br/><br/>
<a href="<?=site_url('site/store2')?>">Store2</a><br/><br/>

<?php 

	echo 
		site_url('store1'),"<br/><br/>" ,
		site_url('store2'); 

?>



<!-- <table border="1"> -->

<table class="table" >
	<tr>
		<th>Header 1</th>
		<th>Header 2</th>
	</tr>
	<tr>
		<td><a href="http://localhost/ci/ci">My Code Ignighter ci1</a></td>
		<td><a href="http://net.tutsplus.com/tutorials/php/codeigniter-from-scratch-day-1/">Code Igniter from scratch</a></td>
	</tr>
	<tr>
		<td><a href="http://net.tutsplus.com/articles/news/codeigniter-from-scratch-day-5-crud/">CRUD</a></td>
		<td>The most requested tutorial for day five of our CodeIgniter screencast series was for an introduction to CRUD operations. We’ll review how to easily create, read, update, and delete records using CI’s active-records class.</td>
	</tr>
</table>

	<div id="container">
		<p>view loaded</p>
		<pre>
			<?php 
				print_r($recs);
				foreach($recs as $r){
						echo $r->title,'<br />';
				}
			?>
		</pre>
	
	</div>




</body>

</html>


