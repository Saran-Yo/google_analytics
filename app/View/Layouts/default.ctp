<?php
/**
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
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
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

		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('font-awesome.min');
		echo $this->Html->css('theme');
		echo $this->Html->css('style');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		
	?>
</head>
<body>
	<section>
	  <div class="jumbotron" style="margin-top:-20px;">
	    <div class="container">
	      <div class="row">
	        <div class="col-sm-12 col-lg-12">
	          <h1>Google Analytics</h1>
	          <p></p>
	        </div>
	      </div>
	    </div>
	  </div>
  		<div class="container">
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			
			<p>
				
			</p>
		</div>
	</div>
</section>
	<?php //echo $this->element('sql_dump'); 
		echo $this->Html->script('jquery.min');
		echo $this->Html->script('bootstrap.min');
		echo $this->Html->script('script');
		echo $this->fetch('script');
	?>
</body>
</html>
