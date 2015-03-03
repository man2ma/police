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

       $monthdata['10']  = 0;
       $monthdata['11']  = 0;
       $monthdata['12']  = 0;
       $monthdata['13']  = 0;
       $monthdata['14']  = 0;
       $monthdata['15'] = 0;
       $monthdata['16']  = 0;
       $monthdata['17']  = 0;
       $monthdata['18'] = 0;
       $monthdata['19'] = 0;
       $monthdata['20'] = 0;
       $monthdata['21'] = 0;
       $monthdata['22'] = 0;
       $monthdata['23'] = 0;
       $monthdata['24'] = 0;
       $monthdata['25'] = 0;
       $monthdata['26'] = 0;
       $monthdata['27'] = 0;
       $monthdata['28'] = 0;
       $monthdata['29'] = 0;
       $monthdata['30'] = 0;
       $monthdata['31'] = 0;
       $monthdata['32'] = 0;
       $monthdata['33'] = 0;
       $monthdata['34'] = 0;
       
       $policeregion = '';

?>
<?php
//Handle Headings

    $title = 'Makosa ya Kuwania Mali kuanzia '.$month1.' - '.$month2.' '.$year;

?>

<table class="table-report" id="csvreport">
     <th><caption><b><?php echo $title; ?></b></caption></th>

<tr class="success">
         <td><b>Mkoa</b></td><td><b>Kupatikana na Silaha</b></td><td><b></b></td><td><b>Kupatikana na Nyara</b></td><td><b>Rushwa</b></td><td><b>kupatikana na Pombe Moshi</b></td><td><b>Magendo</b></td><td><b>Kupatikana na Risasi</b></td><td><b>Kupatikana na bomu</b></td><td><b>Uhamiaji haramu</b></td><td><b>Kupatikana na nyaraka za serikali</b></td><td><b></b></td><td><b>Kupatikana na dawa</b></td><td><b>Ukahaba</b></td><td><b>Kukataa amri halali</b></td><td><b>Kumpa mimba mwanafunzi</b></td><td><b>Kupatikana na sare za jeshi</b></td><td><b></b></td><td><b>Kupigana hadharani</b></td><td><b>Kuingia kwenye hifadhi bila kibali</b></td><td><b>Kutelekeza familia</b></td><td><b>Kutoa taarifa za uongo</b></td><td><b>Kutoroka kambini</b></td><td><b>Kutorosha mtoto shule</b></td><td><b>Kutishia kuua</b></td><td><b>Kutumia lugha za matusi</b></td><td><b>Kumzuia mtumishi wa serikali kufanya kazi</b></td><td><b>Kucheza kamari</b></td><td><b>Uwindaji haramu</b></td>
     </tr>
     <?php foreach ($unique as $status) {
         
            $policeregion = $status;
            $pccbdistrict = $status;
            
          foreach($statusdata->result() as $report) {
                             
 
                   if($report->crimecat_id == '10'){
                    
                    $monthdata[10] += count($report->crimecat_id);
                   }
                   elseif($report->crimecat_id == '11'){
                    
                    $monthdata[11] += count($report->crimecat_id);
                   }
                   elseif($report->crimecat_id == '12'){
                    
                    $monthdata[12] += count($report->crimecat_id);
                   }
                   elseif($report->crimecat_id == '13'){
                    
                    $monthdata[13] += count($report->crimecat_id);
                   }
                   elseif($report->crimecat_id == '14'){
                    
                    $monthdata[14] += count($report->crimecat_id);
                   }
                   elseif($report->crimecat_id == '15'){
                    
                    $monthdata[15] += count($report->crimecat_id);
                   }
                   elseif($report->crimecat_id == '16'){
                    
                    $monthdata[16] += count($report->crimecat_id);
                   }
                   elseif($report->crimecat_id == '17'){
                    
                    $monthdata[17] += count($report->crimecat_id);
                   }
                   elseif($report->crimecat_id == '18'){
                    
                    $monthdata[18] += count($report->crimecat_id);
                   }
                   elseif($report->crimecat_id == '19'){
                    
                    $monthdata[19] += count($report->crimecat_id);
                   }
                   elseif($report->crimecat_id == '20'){
                    
                    $monthdata[20] += count($report->crimecat_id);
                   }
                   elseif($report->crimecat_id == '21'){
                    
                    $monthdata[21] += count($report->crimecat_id);
                   }
                    elseif($report->crimecat_id == '22'){
                    
                    $monthdata[22] += count($report->crimecat_id);
                   }
                   elseif($report->crimecat_id == '23'){
                    
                    $monthdata[23] += count($report->crimecat_id);
                   }
                    elseif($report->crimecat_id == '24'){
                    
                    $monthdata[24] += count($report->crimecat_id);
                   }
                    elseif($report->crimecat_id == '25'){
                    
                    $monthdata[25] += count($report->crimecat_id);
                   }
                   elseif($report->crimecat_id == '26'){
                    
                    $monthdata[26] += count($report->crimecat_id);
                   }
                    elseif($report->crimecat_id == '27'){
                    
                    $monthdata[27] += count($report->crimecat_id);
                   }
                    elseif($report->crimecat_id == '28'){
                    
                    $monthdata[28] += count($report->crimecat_id);
                   }
                   elseif($report->crimecat_id == '29'){
                    
                    $monthdata[29] += count($report->crimecat_id);
                   }
                   elseif($report->crimecat_id == '30'){
                    
                    $monthdata[30] += count($report->crimecat_id);
                   } 
                    elseif($report->crimecat_id == '31'){
                    
                    $monthdata[31] += count($report->crimecat_id);
                   }
                    elseif($report->crimecat_id == '32'){
                    
                    $monthdata[32] += count($report->crimecat_id);
                   }
                   elseif($report->crimecat_id == '33'){
                    
                    $monthdata[33] += count($report->crimecat_id);
                   }
                   elseif($report->crimecat_id == '34'){
                    
                    $monthdata[34] += count($report->crimecat_id);
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
       $monthdata['10']  = 0;
       $monthdata['11']  = 0;
       $monthdata['12']  = 0;
       $monthdata['13']  = 0;
       $monthdata['14']  = 0;
       $monthdata['15'] = 0;
       $monthdata['16']  = 0;
       $monthdata['17']  = 0;
       $monthdata['18'] = 0;
       $monthdata['19'] = 0;
       $monthdata['20'] = 0;
       $monthdata['21'] = 0;
       $monthdata['22'] = 0;
       $monthdata['23'] = 0;
       $monthdata['24'] = 0;
       $monthdata['25'] = 0;
       $monthdata['26'] = 0;
       $monthdata['27'] = 0;
       $monthdata['28'] = 0;
       $monthdata['29'] = 0;
       $monthdata['30'] = 0;
       $monthdata['31'] = 0;
       $monthdata['32'] = 0;
       $monthdata['33'] = 0;
       $monthdata['34'] = 0;
     }
?>

</table>


