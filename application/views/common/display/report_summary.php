 <link href="<?php echo base_url(); ?>packages/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <br/><br/>
 <table class="table table-bordered">
    <caption>MCHANGANUO WA MAKOSA MAKUBWA NA MADOGO YA JINAI <?php echo strtoupper($month1).' - '.strtoupper($month2).' '.$year2.'/'.$year; ?></caption>
    <tr class="success">
        <th>MAKOSA</th>
        <th><?php echo strtoupper($month1).' - '.strtoupper($month2).' '.$year2; ?></th>
        <th><?php echo strtoupper($month1).' - '.strtoupper($month2).' '.$year; ?></th>
        <th>TOFAUTI</th>
        <th>%</th>
    </tr>
    <tr><td colspan="5"><b>JINAI</b></td></tr>
    <?php $madogo_prev=0; $madogo_curr=0; $makubwa_prev=0; $makubwa_curr=0; 
    
       foreach ($report->result() as $data) { 
           if($year2==$data->year && $data->tukiostatus == 1){
                  $madogo_prev+=count($data->crimecat_id);
             }   
            if($year==$data->year && $data->tukiostatus == 1){
                $madogo_curr+=count($data->crimecat_id);
            }
            if($year2==$data->year && $data->tukiostatus == 2){
                  $makubwa_prev+=count($data->crimecat_id);
             }   
            if($year==$data->year && $data->tukiostatus == 2){
                $makubwa_curr+=count($data->crimecat_id);
            }
    }?>
    
    <tr>
        <td><b>MADOGO</b></td>
        <td align="right"><b>
            <?php echo $madogo_prev; ?>
        </b></td>
        <td align="right"><b>
            <?php echo $madogo_curr; ?>
        </b></td>
        <td align="right"><b>
            <?php echo $madogo_curr - $madogo_prev; ?>
        </b></td>
        <td align="right"><b>
            <?php echo ((($madogo_curr - $madogo_prev)/$madogo_curr)*100); ?>
        </b></td>
    </tr>
    <tr>
        <td><b>MAKUBWA</b></td>
        <td align="right"><b>
            <?php echo $makubwa_prev; ?>
        </b></td>
        <td align="right"><b>
            <?php echo $makubwa_curr; ?>
        </b></td>
        <td align="right"><b>
            <?php echo $makubwa_curr - $makubwa_prev; ?>
        </b></td>
        <td align="right"><b>
            <?php echo ((($makubwa_curr - $makubwa_prev)/$makubwa_curr)*100); ?>
        </b></td>
    </tr>
    <tr class="success">
        <td><b>JUMLA</b></td>
            <td align="right"><b>
                <?php echo $madogo_prev + $makubwa_prev; ?>
            </b></td>
            <td align="right"><b>
                <?php echo $makubwa_curr + $madogo_curr; ?>
            </b></td>
            <td align="right"><b>
            <?php echo (($madogo_curr - $madogo_prev)+($makubwa_curr - $makubwa_prev)); ?>
        </b></td>
        <td align="right"><b>
            <?php echo ((($madogo_curr - $madogo_prev)/$madogo_curr)*100) + ((($makubwa_curr - $makubwa_prev)/$makubwa_curr)*100); ?>
        </b></td>
    </tr>      

</table>



