<?php
defined('BASEPATH') or exit('No direct script access allowed');
include 'header.php';
?>

<?php echo form_open('home/save'); ?>
        <div class="columns">

  			<div class="column is-8 is-offset-1">
			  <h1 class="title is-3 has-text-black ">Create Customer </h1><hr>
				<div class="field is-horizontal">
						<div class="field-label is-normal">
							<label class="label">Customer Name</label>
						</div>
						<div class="field-body">
							<div class="field">
						         <?php echo form_input(['name' => 'name', 'class' => 'input', 'placeholder' => 'Customer Name', 'value' => set_value('name')]); ?>
							</div>
						</div>
                        <?php echo form_error('name');?>
				</div>

				<div class="field is-horizontal">
						<div class="field-label is-normal">
							<label class="label">Phone </label>
						</div>
						<div class="field-body">
							<div class="field">
                                <?php echo form_input(['name' => 'phone', 'class' => 'input', 'placeholder' => 'Phone', 'value' => set_value('phone')]); ?>
                            </div>
						</div>
                        <?php echo form_error('phone');?>
				</div>

				<div class="field is-horizontal">
						<div class="field-label is-normal">
							<label class="label">Address </label>
						</div>
						<div class="field-body">
							<div class="field">
							    <?php echo form_input(['name'=>'address','class'=>'input','placeholder'=>'Address','value'=>set_value('address')]);?>
                            </div>
						</div>
                        <?php echo form_error('address');?>
				</div>

				<div class="field is-horizontal">
						<div class="field-label is-normal">
							<label class="label">City </label>
						</div>
						<div class="field-body">
							<div class="field">
								
                                <?php echo form_input(['name'=>'city','class'=>'input','placeholder'=>'City','value'=>set_value('city')]);?>

								
							</div>
						</div>
                        <?php echo form_error('city');?>
				</div>

				<div class="field is-horizontal">
						<div class="field-label is-normal">
							<label class="label">Country </label>
						</div>
						<div class="field-body">
							<div class="field">
                                <?php echo form_input(['name'=>'country','class'=>'input','placeholder'=>'Country','value'=>set_value('country')]);?>
                            </div>
						</div>
                        <?php echo form_error('country');?>
				</div>

				<div class="buttons mr-6">
                    <?php echo form_submit(['value' => 'Submit', 'class' => 'button is-info']); ?>
                    <?php echo form_submit(['value' => 'Reset', 'class' => 'button']); ?>

				</div>



			</div>
  		</div>

<?php echo form_close();
include 'footer.php'; ?>