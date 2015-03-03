<link href="<?php echo base_url(); ?>css/main.css" rel="stylesheet"> 
<link href="<?php echo base_url(); ?>packages/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
 <br/><br/>
 
<?php 
 
      $policeregion = '';
         $i = 1;
       
        foreach ($statusdata->result() as $value )
        {
            //print_r($value);
            if($policeregion != $value->region_policename){
             $regioncontainer[$i++] = $value->region_policename;
             $policeregion = $value->region_policename;
             }
             $valuefirst = $value->region_policename;
         }


            
       $unique = array_unique($regioncontainer);

       $monthdata['1']  = 0;
       $monthdata['2']  = 0;
       $monthdata['3']  = 0;
       $monthdata['4']  = 0;
       $monthdata['5']  = 0;
       $monthdata['6'] = 0;
       $monthdata['7']  = 0;
       $monthdata['8']  = 0;
       $monthdata['9'] = 0;
      
       $policeregion = '';

?>
<?php
//Handle Headings

    $title = 'Makosa dhidi ya binadamu kuanzia '.$month1.' - '.$month2.' '.$year;

?>

<table class="table-report" id="csvreport">
     <th><caption><b><?php echo $title; ?></b></caption></th>

<tr class="success">
         <td><b>Mkoa</b></td><td><b>Mauaji</b></td><td><b>Taarifa ya Kifo</b></td><td><b>Kubaka</b></td><td><b>Kulawiti</b></td><td><b>Kunajisi</b></td><td><b>Usafirishaji haramu wa binadamu</b></td><td><b>Kuzini na Maharimu</b></td><td><b>Kutupa watoto</b></td><td><b>Wizi wa watoto</b></td>
     </tr>
     <?php foreach ($unique as $status) {
         
            $policeregion = $status;
            $pccbdistrict = $status;
            
          foreach($statusdata->result() as $report) {
                             
 
                   if($report->crimecat_id == '1'){
                    
                    $monthdata[1] += count($report->crimecat_id);
                   }
                   elseif($report->crimecat_id == '2'){
                    
                    $monthdata[2] += count($report->crimecat_id);
                   }
                   elseif($report->crimecat_id == '3'){
                    
                    $monthdata[3] += count($report->crimecat_id);
                   }
                   elseif($report->crimecat_id == '4'){
                    
                    $monthdata[4] += count($report->crimecat_id);
                   }
                   elseif($report->crimecat_id == '5'){
                    
                    $monthdata[5] += count($report->crimecat_id);
                   }
                   elseif($report->crimecat_id == '6'){
                    
                    $monthdata[6] += count($report->crimecat_id);
                   }
                   elseif($report->crimecat_id == '7'){
                    
                    $monthdata[7] += count($report->crimecat_id);
                   }
                   elseif($report->crimecat_id == '8'){
                    
                    $monthdata[8] += count($report->crimecat_id);
                   }
                   elseif($report->crimecat_id == '9'){
                    
                    $monthdata[9] += count($report->crimecat_id);
                   }
                   
          }
          
  ?>
            <tr>
                <td><b><?php echo $policeregion; ?></b></td>
            <?php foreach($monthdata as $data){ ?>
            <td align="right"> <?php echo $data; ?> </td>
            <?php } ?>
            </tr>
 
     
     
     <?php
       $monthdata['1']  = 0;
       $monthdata['2']  = 0;
       $monthdata['3']  = 0;
       $monthdata['4']  = 0;
       $monthdata['5']  = 0;
       $monthdata['6'] = 0;
       $monthdata['7']  = 0;
       $monthdata['8']  = 0;
       $monthdata['9'] = 0;
     }
?>

</table>


