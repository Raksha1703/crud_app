<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('header.php');
include('nav.php');

?>

		<div class="columns">
  			<div class="column is-8 is-offset-1">
			  <h1 class="title is-3 has-text-black ">Create Customer </h1><hr>
				<div class="field is-horizontal">
						<div class="field-label is-normal">
							<label class="label">Customer Name</label>
						</div>
						<div class="field-body">
							<div class="field">
								<p class="control is-expanded has-icons-left">
									<input class="input" type="text" placeholder="Customer Name">
								</p>
							</div>
						</div>
				</div>

				<div class="field is-horizontal">
						<div class="field-label is-normal">
							<label class="label">Phone </label>
						</div>
						<div class="field-body">
							<div class="field">
								<p class="control is-expanded has-icons-left">
									<input class="input" type="text" placeholder="Phone">
								</p>
							</div>
						</div>
				</div>

				<div class="field is-horizontal">
						<div class="field-label is-normal">
							<label class="label">Address </label>
						</div>
						<div class="field-body">
							<div class="field">
								<p class="control is-expanded has-icons-left">
									<input class="input" type="text" placeholder="Address">
								</p>
							</div>
						</div>
				</div>

				<div class="field is-horizontal">
						<div class="field-label is-normal">
							<label class="label">City </label>
						</div>
						<div class="field-body">
							<div class="field">
								<p class="control is-expanded has-icons-left">
									<input class="input" type="text" placeholder="City">
								</p>
							</div>
						</div>
				</div>

				<div class="field is-horizontal">
						<div class="field-label is-normal">
							<label class="label">Country </label>
						</div>
						<div class="field-body">
							<div class="field">
								<p class="control is-expanded has-icons-left">
									<input class="input" type="text" placeholder="Country">
								</p>
							</div>
						</div>
				</div>

				<div class="buttons mr-6">
					<input class="button is-info" type="submit" value="Submit">
					<input class="button" type="reset" value="Reset">
				</div>
					
					

			</div>
  		</div>
				
<?php include('footer.php')?>