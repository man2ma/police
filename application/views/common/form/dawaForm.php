<?php
if($aina_madawa == 'Dawa za viwandani'){ ?>
    <label>Jina la dawa</label>
    <input type='text' name='item_affected' class='form-control'/>
<?php }elseif($aina_madawa == 'Dawa za kulevya'){ ?>
    <label>Jina la dawa</label>
     <?php 
       $js = 'id="" class="form-control"';
       echo form_dropdown('item_affected',$madawa_kulevya,'large', $js); 
     ?>
<?php } ?>

