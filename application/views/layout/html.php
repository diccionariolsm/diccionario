<!DOCTYPE html>
<html>
	<head>
		<title>Diccioanrio LSM</title>
		<?php if(isset($head)) echo $head; ?>
	</head>
	<body>
		<?php if(isset($navbar)) echo $navbar; ?>
		<div class="container-fluid">
			<div class="row">
				<?php if(isset($sidebar)) echo $sidebar; ?>
				<?php if(isset($contend)) echo $contend; ?>
				<?php if(isset($footer)) echo $footer ?>
			</div><!-- .row -->
		</div><!-- container-fluid -->
	</body>
</html>