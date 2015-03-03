<br>
<br>

<?php echo form_open('cro/newTaarifaDo');?>
<legend><i class="glyphicon glyphicon-pencil"></i> Taarifa Mpya</legend>

<div class="form-group">
    <label>Tarehe ya Tukio</label>
     <?php 
      echo form_input($date_settings);
    ?>
</div>

<div class="form-group">
    <label>Aina ya Taarifa</label>
    <input type="text" name='taarifa_title' id='taarifa_title' class="form-control"/>
</div>

<div class="form-group">
    <label>Taarifa yenyewe</label><br/>
     <textarea rows="4" cols="50" name='taarifa_content' id='taarifa_content' class="form-control">
     </textarea> 
</div>

<div class="form-group">
    <label>Rb No</label><br/>
     <?php 
      echo form_input($rb_settings);
    ?>
</div>

<br/>
<div class="form-group">
    <input type="submit" id="taarifa-btn" value='Hifadhi' class='btn btn-info'/>
</div>
<?php echo form_close(); ?>
