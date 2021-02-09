<?php
defined('BASEPATH') or exit('No direct script access allowed');
include ('header.php');
?>

    <form method="post" action="registration">
        <div class="columns mt-6">
  			<div class="column is-4 is-offset-3">
              <h1 class="title is-3 has-text-black ">REGISTER </h1><hr>
              <div class="field is-horizontal">
						<div class="field-label is-normal">
							<label class="label">Username</label>
						</div>
						<div class="field-body">
							<div class="field">
						         <?php echo form_input(['name' => 'username', 'class' => 'input', 'placeholder' => 'Username', 'value' => set_value('username')]); ?>
							</div>
						</div>
                        <?php echo form_error('username');?>
				</div>
                <div class="field is-horizontal">
						<div class="field-label is-normal">
							<label class="label">Email </label>
						</div>
						<div class="field-body">
							<div class="field">
						         <?php echo form_input(['name' => 'email', 'class' => 'input', 'placeholder' => 'Email', 'value' => set_value('email')]); ?>
							</div>
						</div>
                        <?php echo form_error('email');?>
				</div>
                <div class="field is-horizontal">
						<div class="field-label is-normal">
							<label class="label">Password</label>
						</div>
						<div class="field-body">
							<div class="field">
						         <?php echo form_input(['name' => 'password', 'class' => 'input', 'placeholder' => 'Password', 'value' => set_value('password')]); ?>
							</div>
						</div>
                        <?php echo form_error('password');?>
				</div>
                <div class="buttons mr-6">
                    <?php echo form_submit(['value' => 'Register', 'class' => 'button is-info']); ?>
                </div>
            </div>
        </div>
    </form>
        

<?php include 'footer.php'; ?>