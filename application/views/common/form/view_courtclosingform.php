


<br>
<br>
 <div id='changedposition'>
 <div id="close"><a href=""><i class="glyphicon glyphicon-remove"></i></a></div>
<?php echo form_open('');?>
<label class="label label-danger" id="transferwardcout"><i class="glyphicon glyphicon-arrow-right"></i>Kufunga Lalamiko</label>
<hr />
<input type="hidden"  value="<?php echo $this->session->userdata('controller'); ?>" id="controller"/>
<input type="hidden"  value="<?php echo $offence_no; ?>" id="offence_no"/>

<table class='table table-bordered table-striped'>
    <tr><th style="text-align:center">&nbsp;&nbsp;</th><th style="text-align:center"></th><th colspan="4" style="text-align:center">Uamuzi wa Mahakama</th></tr>
<tr> <th >Jina kamili la Mhusika</th><th style="text-align:center">Hatua za Kimahakama</th><th style="text-align:center">Athabu</th><th style="text-align:center">Miezi</th><th colspan="1"style="text-align:center">Miaka</th><th colspan="1" style="text-align:center">Fidia</th></tr>
<?php foreach ($mhusikaclosinginfo->result() as $info) {?>
<tr>
    <td><?php echo $info->fname; ?> &nbsp; <?php echo $info->lname; ?>&nbsp;( <?php echo $info->nickname; ?>)</td>
    <td><?php echo $info->hatua_description; ?></td>
    <td><?php echo $info->athabu_description; ?></td>
    <td><?php echo $info->miezi; ?></td>
    <td><?php echo $info->miaka; ?></td>
    <td><?php echo $info->fidia; ?></td>
</tr>

<?php } ?>
</table>
<input type="hidden"  value="<?php echo $info->court_levelid; ?>" id="courtlevelid"/>
<div class="form-group">
    <input type="submit" name="submit" class="btn btn-sm btn-danger" id="closingcourt" value="Funga">
</div>
<?php echo form_close(); ?>
 </div>