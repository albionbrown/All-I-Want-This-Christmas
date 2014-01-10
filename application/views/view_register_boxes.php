<div id="register_boxes">

<h2>Haven't got an account? Enter your details below!</h2>
	<?php echo form_open('site/register');?>

		<?php $firstname_data = array(
				'name' 		=> 'firstname',
				'class' 	=> 'login',
				'placeholder' => 'First Name',
			);

		echo form_input($firstname_data);?>
		
		<?php $surname_data = array(
				'name' 		=> 'surname',
				'class' 	=> 'login',
				'placeholder' => 'Surname',
			);

		echo form_input($surname_data);?>
		<br>
		<?php $email_data = array(
              'name'        => 'email',
              'id'          => 'register_email',
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
		
		<?php $confirm_data = array(
              'name'        => 'confirm',
              'id'          => 'password',
              'class'       => 'login',
              'placeholder' => 'Confirm Password'
            );

		echo form_password($confirm_data); ?>
		<br>
		<?php echo Form_submit(NULL, 'Register') ?>
	<?php echo form_close();?>
	<?php 
	if(isset($errors)){
		echo $errors;
	}

	?>
</div>