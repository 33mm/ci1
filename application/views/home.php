
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>

<body>
Content of the document......
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


