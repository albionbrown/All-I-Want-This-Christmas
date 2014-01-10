<?php if(!isset($_SESSION['email'])){ ?><div id="login_boxes">
<h2>Already have an account? Log in here.</h2>
	<?php echo form_open('site/verify_log_in');?>
		
		<?php $email_data = array(
              'name'        => 'email',
              'id'          => 'email_address',
              'class'       => 'login',
              'placeholder' => 'Email Address'
            );

		echo form_input($email_data); ?>
		<br>
		<?php $password_data = array(
              'name'        => 'password',
              'id'          => 'password',
              'class'       => 'login',
              'placeholder' => 'Password'
            );

		echo form_password($password_data); ?>

		<br>
		<?php echo Form_submit(NULL, 'Log in') ?>
	<?php echo form_close();?>
	<?php 
	$result = @$_GET['result']; 
	echo "<p>$result</p>";
?>
</div>
<?php }else{ echo "<p>You are already logged in.</p>";} ?>