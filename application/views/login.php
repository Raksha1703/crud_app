<?php
defined('BASEPATH') OR exit('No direct script access allowed');


include('header.php');

?>

    <form method="post" action="login/submit">
        <div class="columns mt-6">
  			<div class="column is-4 is-offset-3">

              <h1 class="title is-3 has-text-black ">LOGIN </h1><hr>
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label">Username</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                            <div class="control">
                                <input class="input" type="text" name="username" placeholder="Username">
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label">Password</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                            <div class="control">
                                <input class="input" type="text" name="password" placeholder="Password">
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="control">
                        <input class="button is-info" type="submit" value="Login">
                    </div>
                
            </div>        
    </form>

    <?php include('footer.php');?>