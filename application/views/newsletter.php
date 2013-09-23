<!DOCTYPE html>
<html>
<head>
	<title>News Letter</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/bootstrap/css/bootstrap.css">
</head>
<body>

	<div  id="newsletter">
		<?php
			echo form_open('email/send');
			$name_data = array(
				'name' => 'name',
				'id' => 'name',
				'value' => set_value('name'), //sticky forms
			 );
			$email_data = array(
				'name' => 'email',
				'id' => 'email',
				'value' => set_value('name'), //sticky forms
			 );

			echo "<p><label for='name'>Name: </label>", form_input($name_data),"<p/>";
			echo "<p><label for='name'>Email: </label>", form_input($email_data),"<p/>";
			echo "<p>", form_submit('submit', 'OK','class="btn btn-primary btn-xs"'),"<p/>";			

			echo form_close();

			echo validation_errors('<p class="error">');
		?>
	</div>

</body>
</html>
