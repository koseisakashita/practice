<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->fetch('meta');
		echo $this->html->css('base');
		echo $this->fetch('css');
		echo $this->fetch('script');
		echo $this->Html->script('main');
	?>	
	<script src="/practice/cakephp/app/webroot/js/lib/underscore-min.js"></script>
	<script src="/practice/cakephp/app/webroot/js/lib/jquery.min.js"></script>
	<script src="/practice/cakephp/app/webroot/js/lib/backbone-min.js"></script>

</head>
<body>
	<?php echo $this->Element('header');?>
	<main class="main-container">
		<div class="content">
			<?php echo $this->Flash->render(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
	</main>
	<?php echo $this->Element('footer');?>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
