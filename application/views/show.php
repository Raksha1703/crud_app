<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('header.php');
?>

        
        <div class="columns">
  			<div class="column is-8 is-offset-1">
            
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
                                        <td><?php echo anchor("home/edit/".$record->id,'Update',['class'=>'button is-success']);?>
                                            <?php echo anchor("home/delete",'Delete',['class'=>'button is-danger']);?></td>
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