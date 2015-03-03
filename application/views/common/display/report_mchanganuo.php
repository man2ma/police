 <link href="<?php echo base_url(); ?>packages/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <br/><br/>
<table class="table table-bordered">
    <caption>MCHANGANUO WA MAKOSA MAKUBWA YA JINAI <?php echo strtoupper($month1).' - '.strtoupper($month2).' '.$year2.'/'.$year; ?></caption>
    <tr class="success">
        <th>MAKOSA</th>
        <th><?php echo strtoupper($month1).' - '.strtoupper($month2).' '.$year2; ?></th>
        <th><?php echo strtoupper($month1).' - '.strtoupper($month2).' '.$year; ?></th>
        <th>TOFAUTI</th>
        <th>%</th>
    </tr>
    <?php
//    $query = $this->db->query("SELECT * FROM crime_category WHERE crimecat_id>0 ORDER BY crimecat_id ASC");
//
//    foreach ($query->result() as $value) {
//        echo $value->crimecat_name;
//    }
    
    
    $mauaji_prev = 0;
    $mauaji_curr = 0;
    $kubaka_prev = 0;
    $kubaka_curr = 0;
    $kulawiti_prev = 0;
    $kulawiti_curr = 0;
    $wizi_watotoprev = 0;
    $wizi_watotocurr = 0;
    $kutupa_watotoprev = 0;
    $kutupa_watotocurr = 0;
    $kunajisi_prev = 0;
    $kunajisi_curr = 0;
    $usafirishaji_binadamuprev = 0;
    $usafirishaji_binadamucurr = 0;
    ?>
    
    <?php foreach ($report->result() as $data) { 
         //MAUAJI
          if($data->crimecat_id == 1 && $year2 == $data->year){
              $mauaji_prev+= count($data->crimecat_id);
          }elseif($data->crimecat_id == 1 && $year == $data->year){
              $mauaji_curr+= count($data->crimecat_id);
          }
          $mauaji_diff = $mauaji_curr - $mauaji_prev;
          
          //KUBAKA
          if($data->crimecat_id == 3 && $year2 == $data->year){
              $kubaka_prev+= count($data->crimecat_id);
          }elseif($data->crimecat_id == 3 && $year == $data->year){
              $kubaka_curr+= count($data->crimecat_id);
          }
          $kubaka_diff = $kubaka_curr - $kubaka_prev;
          
          //KULAWITI
          if($data->crimecat_id == 4 && $year2 == $data->year){
              $kulawiti_prev+= count($data->crimecat_id);
          }elseif($data->crimecat_id == 4 && $year == $data->year){
              $kulawiti_curr+= count($data->crimecat_id);
          }
          $kulawiti_diff = $kulawiti_curr - $kulawiti_prev;
          
          //WIZI WA WATOTO
          if($data->crimecat_id == 9 && $year2 == $data->year){
              $wizi_watotoprev+= count($data->crimecat_id);
          }elseif($data->crimecat_id == 9 && $year == $data->year){
              $wizi_watotocurr+= count($data->crimecat_id);
          }
          $wizi_watotodiff = $wizi_watotocurr - $wizi_watotoprev;
          
          //KUTUPA WATOTO
          if($data->crimecat_id == 8 && $year2 == $data->year){
              $kutupa_watotoprev+= count($data->crimecat_id);
          }elseif($data->crimecat_id == 8 && $year == $data->year){
              $kutupa_watotocurr+= count($data->crimecat_id);
          }
          $kutupa_watotodiff = $kutupa_watotocurr - $kutupa_watotoprev;
          
          //KUNAJISI
          if($data->crimecat_id == 5 && $year2 == $data->year){
              $kunajisi_prev+= count($data->crimecat_id);
          }elseif($data->crimecat_id == 5 && $year == $data->year){
              $kunajisi_curr+= count($data->crimecat_id);
          }
          $kunajisi_diff = $kunajisi_curr - $kunajisi_prev;
          
          //USAFIRISHAJI BINADAMU
          if($data->crimecat_id == 6 && $year2 == $data->year){
              $usafirishaji_binadamuprev+= count($data->crimecat_id);
          }elseif($data->crimecat_id == 6 && $year == $data->year){
              $usafirishaji_binadamucurr+= count($data->crimecat_id);
          }
          $usafirishaji_binadamudiff = $usafirishaji_binadamucurr - $usafirishaji_binadamuprev;
     }?>
    
    <tr>
        <td colspan="5" align="center"><b>MAKOSA DHIDI YA BINADAMU</b></td>
    </tr>
    <tr>
        <td><b>MAUAJI</b></td>
        <td align="right"><b><?php echo $mauaji_prev; ?></b></td>
        <td align="right"><b><?php echo $mauaji_curr; ?></b></td>
        <td align="right"><b><?php echo $mauaji_diff; ?></b></td>
        <td align="right"><b><?php echo (($mauaji_curr/$mauaji_diff)*100); ?></b></td>
    </tr>

    <tr>
        <td><b>UBAKAJI</b></td>
        <td align="right"><b><?php echo $kubaka_prev; ?></b></td>
        <td align="right"><b><?php echo $kubaka_curr; ?></b></td>
        <td align="right"><b><?php echo $kubaka_diff; ?></b></td>
        <td align="right"><b><?php echo (($kubaka_curr/$kubaka_diff)*100); ?></b></td>
    </tr>
    
    <tr>
        <td><b>KULAWITI</b></td>
        <td align="right"><b><?php echo $kulawiti_prev; ?></b></td>
        <td align="right"><b><?php echo $kulawiti_curr; ?></b></td>
        <td align="right"><b><?php echo $kulawiti_diff; ?></b></td>
        <td align="right"><b><?php echo (($kulawiti_curr/$kulawiti_diff)*100); ?></b></td>
    </tr>
    
    <tr>
        <td><b>WIZI WA WATOTO</b></td>
        <td align="right"><b><?php echo $wizi_watotoprev; ?></b></td>
        <td align="right"><b><?php echo $wizi_watotocurr; ?></b></td>
        <td align="right"><b><?php echo $wizi_watotodiff; ?></b></td>
        <td align="right"><b><?php echo (($wizi_watotocurr/$wizi_watotodiff)*100); ?></b></td>
    </tr>
    
    <tr>
        <td><b>KUTUPA WATOTO</b></td>
        <td align="right"><b><?php echo $kutupa_watotoprev; ?></b></td>
        <td align="right"><b><?php echo $kutupa_watotocurr; ?></b></td>
        <td align="right"><b><?php echo $kutupa_watotodiff; ?></b></td>
        <td align="right"><b><?php echo (($kutupa_watotocurr/$kutupa_watotodiff)*100); ?></b></td>
    </tr>
    
    <tr>
        <td><b>KUNAJISI</b></td>
        <td align="right"><b><?php echo $kunajisi_prev; ?></b></td>
        <td align="right"><b><?php echo $kunajisi_curr; ?></b></td>
        <td align="right"><b><?php echo $kunajisi_diff; ?></b></td>
        <td align="right"><b><?php echo (($kunajisi_curr/$kunajisi_diff)*100); ?></b></td>
    </tr>
    
    <tr>
        <td><b>USAFIRISHAJI BINADAMU</b></td>
        <td align="right"><b><?php echo $usafirishaji_binadamuprev; ?></b></td>
        <td align="right"><b><?php echo $usafirishaji_binadamucurr; ?></b></td>
        <td align="right"><b><?php echo $usafirishaji_binadamudiff; ?></b></td>
        <td align="right"><b><?php echo (($usafirishaji_binadamucurr/$usafirishaji_binadamudiff)*100); ?></b></td>
    </tr>
    <tr>
        <td colspan="5"><b></b></td>
    </tr>

</table>



