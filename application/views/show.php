<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('header.php');
?>

       
        <div class="columns">
  			<div class="column is-8 is-offset-1">
                <div class="field has-addons">
                   <form method="POST" action="/">
                        <div class="columns">
                                <div class="control">
                                    <input class="input" name="search" type="text" placeholder="Search Here">
                                </div>
                                <div class="control">
                                    <input class="button is-info" type="submit" value="Search">
                                    <?php echo anchor("home",'Reset',['class'=>'button']);?>
                                </div>
                        </div>
                       
                    </form>
                </div>
                <?php if($error = $this->session->flashdata('response')):?>
                    <div class="notification is-success">
                            <button class="delete"></button>
                            <?php echo $error;?>
                    </div>
		        <?php endif;?>

                <div class="buttons mr-6">
                    <?php echo anchor("home/create",'Create',['class'=>'button is-info']);?>
                    
                </div>
                			
                <table class="table is-bordered is-striped is-hoverable">
                    <thead>
                           <th>Cutomer Name</th> 
                           <th>Phone</th>   
                           <th>Address</th>
                           <th>City</th>
                           <th>Country</th>
                           <th>Action</th>
                    </thead>
                    <tbody>
                            <?php if(count($data)):?>
                                <?php foreach($data as $record){?>
                                    <tr>
                                        <td><?php echo $record->name;?></td>
                                        <td><?php echo $record->phone;?></td>
                                        <td><?php echo $record->address;?></td>
                                        <td><?php echo $record->city;?></td>
                                        <td><?php echo $record->country;?></td>
                                        <td><?php echo anchor("home/edit/{$record->id}",'Update',['class'=>'button is-success']);?>
                                            <?php echo anchor("home/delete/{$record->id}",'Delete',['class'=>'button is-danger']);?></td>
                                    </tr>
                                <?php }?>
                            <?php else: ?>
                                    <tr>No Records Found!!</tr>
                            <?php endif;?>
                    </tbody>
                </table>

            </div>
        </div>

<?php include('footer.php');?>