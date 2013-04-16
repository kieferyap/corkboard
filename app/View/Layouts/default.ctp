<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
<<<<<<< HEAD

=======
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
>>>>>>> 799f1009ecbc105572106edd6e44ac7d7eac6482
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
<<<<<<< HEAD
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
=======
>>>>>>> 799f1009ecbc105572106edd6e44ac7d7eac6482
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?php echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>
			=========================<br/>
<<<<<<< HEAD
			<form name="input" action="http://localhost/corkboard/usercourse/" method="get">
				<input type="text" name="courseid"/>
				<input type="button" value="submit" onclick="$(this).parents().filter('form').trigger('submit');"/>
=======
			<form name="input" action="http://localhost/Corkboard/user/" method="GET">
				<input type="hidden" name="_method" value="put" />
				<input type="text" name="user">
>>>>>>> 799f1009ecbc105572106edd6e44ac7d7eac6482
			</form>
			=========================<br/>
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
<<<<<<< HEAD
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
Welcome to the API.
=======
>>>>>>> 799f1009ecbc105572106edd6e44ac7d7eac6482
