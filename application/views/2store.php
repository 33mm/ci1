<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/bootstrap/css/bootstrap.css">
	
	<!-- BEGIN FOXYCART FILES 2store-->
	<link rel="stylesheet" href="//cdn.foxycart.com/static/scripts/colorbox/1.3.23/style1_fc/colorbox.css?ver=1" type="text/css" media="screen" charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/bootstrap/css/bootstrap.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="//cdn.foxycart.com/2store/foxycart.colorbox.js?ver=2" type="text/javascript" charset="utf-8"></script>
	<!-- END FOXYCART FILES -->
</head>
<body>
	<a href="<?=base_url()?>">base_url</a>
	<br/><br/>
	<!-- BEGIN FOXYCART FILES 2store-->
	<!-- link example -->
	<a href="https://2store.foxycart.com/cart?name=Cool%20Example&price=10&color=green&code=sku123">2 Add a green Cool Example</a>
	<!-- form example -->
	<form action="https://2store.foxycart.com/cart" method="post" accept-charset="utf-8">
	<input type="hidden" name="name" value="Cool Example" />
	<input type="hidden" name="price" value="10" />
	<input type="hidden" name="code" value="sku123" />
	<label class="label_left">Size</label>
	<select name="size">
	    <option value="small">Small</option>
	    <option value="medium">Medium</option>
	    <option value="large">Large</option>
	</select>
	<input type="submit" name="Add a Cool Example" value="Add a Cool Example" class="submit" />
	</form><br/><br/>
	<!-- END FOXYCART FILES 2store-->

</body>
</html>
