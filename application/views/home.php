
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>


<link href="<?php echo site_url('assets/bootstrap/css/bootstrap.css'); ?>" >
</head>

<body>
Content of the document......

<!-- <table border="1"> -->
<table class="table" >
	<tr>
		<th>Header 1</th>
		<th>Header 2</th>
	</tr>
	<tr>
		<td><a href="http://localhost/ci/ci">My Code Ignighter ci1</a></td>
		<td><a href="http://www.w3schools.com">This is a link</a></td>
	</tr>
	<tr>
		<td><a href="http://www.w3schools.com">This is a link</a></td>
		<td><a href="http://www.w3schools.com">This is a link</a></td>
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


