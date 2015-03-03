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

       $monthdata['37']  = 0;
       $monthdata['38']  = 0;
       $monthdata['39']  = 0;
       $monthdata['40']  = 0;
       $monthdata['41']  = 0;
       $monthdata['42'] = 0;
       $monthdata['43']  = 0;
       $monthdata['44']  = 0;
       $monthdata['45'] = 0;
       $monthdata['46'] = 0;
       $monthdata['47'] = 0;
       $monthdata['48'] = 0;
       $monthdata['49'] = 0;
       $monthdata['50'] = 0;
       $monthdata['51'] = 0;
       $monthdata['52'] = 0;
       $monthdata['53'] = 0;
       $monthdata['54'] = 0;
       $monthdata['55'] = 0;
       $monthdata['56'] = 0;
       $monthdata['62'] = 0;
       
       $policeregion = '';

?>
<?php
//Handle Headings

    $title = 'Makosa ya Kuwania Mali kuanzia '.$month1.' - '.$month2.' '.$year;

?>

<table class="table-report" id="csvreport">
     <th><caption><b><?php echo $title; ?></b></caption></th>

<tr class="success">
         <td><b>Mkoa</b></td><td><b>Wizi wa Mifugo</b></td><td><b>Wizi wa Silaha</b></td><td><b>Wizi wa vyombo vya moto</b></td><td><b>Wizi katika Mabenki</b></td><td><b>Wizi serikalini</b></td><td><b>Wizi wa mali</b></td><td><b>Wizi wa Risasi</b></td><td><b>Unyang'anyi</b></td><td><b>Unyang'anyi katika barabara kuu</b></td><td><b>Kuchoma Moto</b></td><td><b>Ajali ya Moto</b></td><td><b>Uvunjaji</b></td><td><b>Kupatikana na fedha bandia</b></td><td><b>Wizi toka Maungoni</b></td><td><b>Kujaribu kunyang'anya</b></td><td><b>Kujipatia deni kwa njia ya udanganyifu</b></td><td><b>Kujipatia fedha kwa njia ya udanganyifu</b></td><td><b>Kujipatia mali kwa njia ya udanganyifu</b></td><td><b>Wizi wa kuaminiana</b></td><td><b>Kufanya biashara bila leseni</b></td><td><b>Wizi wa vifaa vya magari</b></td>
     </tr>
     <?php foreach ($unique as $status) {
         
            $policeregion = $status;
            $pccbdistrict = $status;
            
          foreach($statusdata->result() as $report) {
                             
 
                   if($report->crimecat_id == '37'){
                    
                    $monthdata[37] += count($report->crimecat_id);
                   }
                   elseif($report->crimecat_id == '38'){
                    
                    $monthdata[38] += count($report->crimecat_id);
                   }
                   elseif($report->crimecat_id == '39'){
                    
                    $monthdata[39] += count($report->crimecat_id);
                   }
                   elseif($report->crimecat_id == '40'){
                    
                    $monthdata[40] += count($report->crimecat_id);
                   }
                   elseif($report->crimecat_id == '41'){
                    
                    $monthdata[41] += count($report->crimecat_id);
                   }
                   elseif($report->crimecat_id == '42'){
                    
                    $monthdata[42] += count($report->crimecat_id);
                   }
                   elseif($report->crimecat_id == '43'){
                    
                    $monthdata[43] += count($report->crimecat_id);
                   }
                   elseif($report->crimecat_id == '44'){
                    
                    $monthdata[44] += count($report->crimecat_id);
                   }
                   elseif($report->crimecat_id == '45'){
                    
                    $monthdata[45] += count($report->crimecat_id);
                   }
                   elseif($report->crimecat_id == '46'){
                    
                    $monthdata[46] += count($report->crimecat_id);
                   }
                   elseif($report->crimecat_id == '47'){
                    
                    $monthdata[47] += count($report->crimecat_id);
                   }
                   elseif($report->crimecat_id == '48'){
                    
                    $monthdata[48] += count($report->crimecat_id);
                   }
                    elseif($report->crimecat_id == '49'){
                    
                    $monthdata[49] += count($report->crimecat_id);
                   }
                   elseif($report->crimecat_id == '50'){
                    
                    $monthdata[50] += count($report->crimecat_id);
                   }
                    elseif($report->crimecat_id == '51'){
                    
                    $monthdata[51] += count($report->crimecat_id);
                   }
                    elseif($report->crimecat_id == '52'){
                    
                    $monthdata[52] += count($report->crimecat_id);
                   }
                   elseif($report->crimecat_id == '53'){
                    
                    $monthdata[53] += count($report->crimecat_id);
                   }
                    elseif($report->crimecat_id == '54'){
                    
                    $monthdata[54] += count($report->crimecat_id);
                   }
                    elseif($report->crimecat_id == '55'){
                    
                    $monthdata[55] += count($report->crimecat_id);
                   }
                   elseif($report->crimecat_id == '56'){
                    
                    $monthdata[56] += count($report->crimecat_id);
                   }
                   elseif($report->crimecat_id == '62'){
                    
                    $monthdata[62] += count($report->crimecat_id);
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
       $monthdata['37']  = 0;
       $monthdata['38']  = 0;
       $monthdata['39']  = 0;
       $monthdata['40']  = 0;
       $monthdata['41']  = 0;
       $monthdata['42'] = 0;
       $monthdata['43']  = 0;
       $monthdata['44']  = 0;
       $monthdata['45'] = 0;
       $monthdata['46'] = 0;
       $monthdata['47'] = 0;
       $monthdata['48'] = 0;
       $monthdata['49'] = 0;
       $monthdata['50'] = 0;
       $monthdata['51'] = 0;
       $monthdata['52'] = 0;
       $monthdata['53'] = 0;
       $monthdata['54'] = 0;
       $monthdata['55'] = 0;
       $monthdata['56'] = 0;
       $monthdata['62'] = 0;
     }
?>

</table>


